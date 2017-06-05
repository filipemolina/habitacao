<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Coparticipante;
use App\Participante;
use App\Dependente;
use App\Telefone;
use App\Endereco;
use Datatables;
use PDF;

class ParticipantesController extends Controller
{
    // Exigir que o usuário esteja logado para acessar essa view

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('is_supervisor')->only([
            'edit',
            'update',
            'destroy',
            'relatorios',
            'imprimeRelatorio'
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Vetor com todos os participantes

        $participantes = Participante::all();

        // Vetor com as idades dos participantes

        $idades = $this->calculaIdades($participantes);

        return view('pessoas.index', compact('participantes', 'idades'));
    }

    /**
     *  Retornar informações do participante via Ajax
     */

    public function info_ajax($id)
    {
        $participante = Participante::with('endereco', 'telefones', 'dependentes', 'coparticipante', 'coparticipante.telefones', 'coparticipante.endereco')->where('id', $id)->first();
        $participante->teste = "filipe";

        return $participante->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostrar tela de cadastro de Pessoas

        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////////////////////////////////////////////////// Validação

        $this->validate($request, [

            // Participante

            'nome'                                  => 'required',
            'cpf'                                   => 'required|unique:participantes',
            'bolsa_familia'                         => 'required',
            'rg'                                    => 'required',
            'orgao_emissor_rg'                      => 'required',
            'emissao_rg'                            => 'date',
            'nascimento'                            => 'date',
            'sexo'                                  => 'required',
            'necessidades_especiais'                => 'required',
            'cep'                                   => 'required',
            'logradouro'                            => 'required',
            'numero'                                => 'required',
            'bairro'                                => 'required',
            'renda_familiar'                        => 'required',
            'tempo_residencia'                      => 'date',
            'telefones.*.numero'                    => 'required',

            // Coparticipante
            // O campo nome é totalmente opcional. Entretanto, caso este seja preenchido
            // todos os campos abaixo se tornam obrigatórios

            'coparticipante.nome'                   => 'required_with:coparticipante.cpf,coparticipante.bolsa_familia,coparticipante.rg,coparticipante.orgao_emissor_rg,coparticipante.emissao_rg,coparticipante.nascimento,coparticipante.sexo,coparticipante.necessidades_especiais,coparticipante.cep,coparticipante.logradouro,coparticipante.numero,coparticipante.bairro',
            'coparticipante.cpf'                    => 'required_with:coparticipante.nome|unique:coparticipantes,cpf',
            'coparticipante.bolsa_familia'          => 'required_with:coparticipante.nome',
            'coparticipante.rg'                     => 'required_with:coparticipante.nome',
            'coparticipante.orgao_emissor_rg'       => 'required_with:coparticipante.nome',
            'coparticipante.emissao_rg'             => 'required_with:coparticipante.nome|date',
            'coparticipante.nascimento'             => 'required_with:coparticipante.nome|date',
            'coparticipante.sexo'                   => 'required_with:coparticipante.nome',
            'coparticipante.necessidades_especiais' => 'required_with:coparticipante.nome',
            'coparticipante.cep'                    => 'required_with:coparticipante.nome',
            'coparticipante.logradouro'             => 'required_with:coparticipante.nome',
            'coparticipante.numero'                 => 'required_with:coparticipante.nome',
            'coparticipante.bairro'                 => 'required_with:coparticipante.nome',

            // Dependentes
            'dependentes.*.nome'                    => 'required_with:dependentes.*.parentesco,dependentes.*.nascimento,dependentes.*.nascimento,dependentes.*.sexo,dependentes.*.necessidades_especiais',
            'dependentes.*.parentesco'              => 'required_with:dependentes.*.nome',
            'dependentes.*.nascimento'              => 'required_with:dependentes.*.nome|date',
            'dependentes.*.sexo'                    => 'required_with:dependentes.*.nome',
            'dependentes.*.necessidades_especiais'  => 'required_with:dependentes.*.nome',

        ]);

        ////////////////////////////////////////////////////// Salvar os dados

        // Participante

        $participante = Participante::create($request->except('coparticipante'));

        // Renda Familiar

        $participante->renda_familiar = str_replace("R$ ", "", $participante->renda_familiar);

        // Verificar se o participante é idoso

        if(date('Y') - date('Y', strtotime($participante->nascimento)) >= 65)
        {
            $participante->idoso = true;
        }

        // Código de inscrição

        if($request->codigo_inscricao == "")
        {
            // Obter o último código de inscrição criado

            $maior = Participante::max("codigo_inscricao");

            $proximo = $maior + 1;

            $participante->codigo_inscricao = $proximo;
        }

        $participante->save();

        // Telefones do Participante

        foreach($request->telefones as $telefone)
        {
            $participante->telefones()->save(new Telefone($telefone));
        }

        // Endereço do Participante

        $participante->endereco()->save(new Endereco($request->all()));

        // Dependentes

        foreach($request->dependentes as $dependente)
        {
            // Dependentes vazios entram na conta. Para evitar problemas com isso
            // o cadastro é feito apenas caso o dependente tenha um nome (o que por
            // sua vez ativa a obrigatoriedade das outras propriedades)

            if(isset($dependente['nome']) && $dependente['nome'] != '')
                $participante->dependentes()->save(new Dependente($dependente));
        }

        //////////////////////////////// Testar se os dados do Coparticipante foram digitados
        //////////////////////////////// e só então cadastrá-lo

        if($request->has('coparticipante.nome'))
        {
            // Coparticipante

            $coparticipante = $participante->coparticipante()->save(new Coparticipante($request->coparticipante));

            // Endereço do Coparticipante

            $coparticipante->endereco()->save(new Endereco($request->input('coparticipante')));

            // Telefones do Coparticipante

            foreach($request->input('coparticipante.telefones') as $telefone)
            {
                $coparticipante->telefones()->save(new Telefone($telefone));
            }
        }

        return redirect('/pessoas/create')->with('sucesso', "Usuário cadastrado com sucesso. Código da inscriçao: <span style='text-transform: uppercase; font-weight: bold; font-size: 16px;'>$participante->codigo_inscricao</span>");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa = Participante::with('endereco', 'telefones', 'coparticipante', 'coparticipante.endereco', 'coparticipante.telefones', 'dependentes')->where('id', $id)->first();

        $faixa = "";
        $periodo = "";

        return view('pessoas.show', compact(['pessoa', 'faixa', 'periodo']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Participante::with('endereco', 'telefones', 'coparticipante', 'coparticipante.endereco', 'coparticipante.telefones', 'dependentes')->where('id', $id)->first();

        return view('pessoas.edit', compact('pessoa'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ////////////////////////////////////////////////// Validação

        $this->validate($request, [

            // Participante

            'nome'                                  => 'required',
            'cpf'                                   => [
                    'required',
                    Rule::unique('participantes')->ignore($id)
            ],
            'bolsa_familia'                         => 'required',
            'rg'                                    => 'required',
            'orgao_emissor_rg'                      => 'required',
            'emissao_rg'                            => 'date',
            'nascimento'                            => 'date',
            'sexo'                                  => 'required',
            'necessidades_especiais'                => 'required',
            'endereco.cep'                          => 'required',
            'endereco.logradouro'                   => 'required',
            'endereco.numero'                       => 'required',
            'endereco.bairro'                       => 'required',
            'renda_familiar'                        => 'required',
            'tempo_residencia'                      => 'date',
            'telefones.*.numero'                    => 'required',
            'inicio-residencia'                     => 'required',

            // Coparticipante
            // O campo nome é totalmente opcional. Entretanto, caso este seja preenchido
            // todos os campos abaixo se tornam obrigatórios

            'coparticipante.nome'                   => 'required_with:coparticipante.cpf,coparticipante.bolsa_familia,coparticipante.rg,coparticipante.orgao_emissor_rg,coparticipante.emissao_rg,coparticipante.nascimento,coparticipante.sexo,coparticipante.necessidades_especiais,coparticipante.cep,coparticipante.logradouro,coparticipante.numero,coparticipante.bairro',
            'coparticipante.cpf'                    => 'required_with:coparticipante.nome',
            'coparticipante.bolsa_familia'          => 'required_with:coparticipante.nome',
            'coparticipante.rg'                     => 'required_with:coparticipante.nome',
            'coparticipante.orgao_emissor_rg'       => 'required_with:coparticipante.nome',
            'coparticipante.emissao_rg'             => 'required_with:coparticipante.nome|date',
            'coparticipante.nascimento'             => 'required_with:coparticipante.nome|date',
            'coparticipante.sexo'                   => 'required_with:coparticipante.nome',
            'coparticipante.necessidades_especiais' => 'required_with:coparticipante.nome',
            'coparticipante.endereco.cep'           => 'required_with:coparticipante.nome',
            'coparticipante.endereco.logradouro'    => 'required_with:coparticipante.nome',
            'coparticipante.endereco.numero'        => 'required_with:coparticipante.nome',
            'coparticipante.endereco.bairro'        => 'required_with:coparticipante.nome',

            // Dependentes
            'dependentes.*.nome'                    => 'required_with:dependentes.*.parentesco,dependentes.*.nascimento,dependentes.*.nascimento,dependentes.*.sexo,dependentes.*.necessidades_especiais',
            'dependentes.*.parentesco'              => 'required_with:dependentes.*.nome',
            'dependentes.*.nascimento'              => 'required_with:dependentes.*.nome|date',
            'dependentes.*.sexo'                    => 'required_with:dependentes.*.nome',
            'dependentes.*.necessidades_especiais'  => 'required_with:dependentes.*.nome',

        ]);

        // Atualizar os dados do participante;

        $participante = Participante::find($id);
        $participante->update($request->all());

        if(date('Y') - date('Y', strtotime($participante->nascimento)) >= 65)
        {
            $participante->idoso = true;
        }
        else
        {
            $participante->idoso = false;
        }

        $participante->save();

        // Atualizar endereço

        $participante->endereco->update($request->endereco);

        // Deletar os telefones atuais

        $participante->telefones()->delete();

        // Criar novos telefones com as informações enviadas

        foreach($request->telefones as $telefone)
        {
            $participante->telefones()->save(new Telefone($telefone));
        }

        // Caso haja um coparticipante no request, o usuário está tentando cadastrar um coparticipante
        // que não existia previamente ou alterar um que já existe.

        if($request->coparticipante['nome'] != null)
        {
            // O método updateOrCreate tenta encontrar um objeto com as características ditadas no primeiro
            // argumento (vetor), caso encontre, ele usa o segundo argumento para alterá-lo. Caso contrário
            // ele usará o segundo argumento para criar um objeto e salvá-lo

            $participante->coparticipante()->updateOrCreate(
                ['participante_id' => $id, 'nome' => $request->coparticipante['nome']],
                $request->coparticipante
            );

            // Atualizar endereço do coparticipante

            $participante->coparticipante->endereco()->updateOrCreate(
                ['coparticipante_id' => $participante->coparticipante->id],
                $request->coparticipante['endereco']
            );

            // Atualizar telefones

            $participante->coparticipante->telefones()->delete();

            foreach($request->coparticipante['telefones'] as $telefone)
            {
                $participante->coparticipante->telefones()->save(new Telefone($telefone));
            }
        }
        else
        {
            // Caso NÃO haja um coparticipante na request, o usuário pode estar tentando excluir um coparticipante
            // ou esta é uma alteração de um participante sem coparticipante

            // Testar se o participante possui coparticipante, nesse caso, excluí-lo

            if(count($participante->coparticipante))
            {
                $participante->coparticipante->delete();
            }
        }

        $dependentes_novos = $request->dependentes ?: [];

        // Retirar os dependentes que foram excluídos

        foreach($participante->dependentes as $dependente)
        {
            // Caso o dependente não exista no vetor da $request, é por que ele foi deletado
            // pelo usuário que estava alterando esse cadastro. Logo deve ser deletado do cadastro

            if(!$this->existeNoVetor($dependente->nome, $dependentes_novos))
            {
                $dependente->delete();
            }
        }

        // Alterar os dependentes que já existem ou adicionar novos

        foreach($dependentes_novos as $dependente)
        {
            $participante->dependentes()->updateOrCreate(
                ['participante_id' => $participante->id, 'nome' => $dependente['nome']],
                $dependente
            );

        }

        return redirect("/pessoas/$participante->id/edit")->with('sucesso', "Participante alterado com sucesso");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obter o participante à ser deletado

        $participante = Participante::find($id);

        // Excluir do banco de dados (soft-delete ativado!)

        $participante->delete();
    }

    /**
     * Tela de seleção de relatórios
     */

    public function relatorios()
    {
        return view('pessoas.relatorios');
    }

    /**
     * Função para gerenciar as chamadas AJAX do DATATABLES
     */

    public function dados()
    {
        // Obter todos os dados de todos os participantes;

        $participantes = Participante::with('endereco', 'telefones', 'coparticipante', 'dependentes')->get();

        // Montar a coleção que irá popular a tabela

        $colecao = collect();

        // Os botões de ação da tabela variam de acordo com o 'role' do usuário atual.

        $padrao = "<a class='btn btn-success  btn-circulo' data-toggle='modal' data-target='#modal_pessoas_show' data-id='{id}' href='#'><i class='fa fa-eye'></i></a>";

        $supervisor_master = "<a class='btn btn-success  btn-circulo' data-toggle='modal' data-target='#modal_pessoas_show' data-id='{id}' href='#'><i class='fa fa-eye'></i></a><a class='btn btn-warning  btn-circulo' href='".url("pessoas/{id}/edit")."'><i class='fa fa-pencil'></i></a><a class='btn btn-danger btn-excluir btn-circulo'  href='#'' data-toggle='modal' data-nome='{nome}' data-id='{id}' data-target='#modalexcluir'><i class='fa fa-trash'></i></a>";

        foreach($participantes as $participante)
        {
            // Preparar a string de ações

            if(Auth::user()->admin == "Padrão")
                $acoes = str_replace(['{id}', '{nome}'], [$participante->id, str_replace("'", "'", $participante->nome)], $padrao);
            else
                $acoes = str_replace(['{id}', '{nome}'], [$participante->id, str_replace("'", "'", $participante->nome)], $supervisor_master);

            $colecao->push([
                'nome'                   => $participante->nome,
                'idade'                  => date('Y') - date('Y', strtotime($participante->nascimento)),
                'sexo'                   => $participante->sexo,
                'necessidades_especiais' => $participante->necessidades_especiais ? "Sim" : "Não",
                'coparticipante'         => count($participante->coparticipante) ? "Sim" : "Não",
                'dependentes'            => count($participante->dependentes),
                'bairro'                 => $participante->endereco->bairro,
                'acoes'                  => $acoes,
            ]);
        }

        return Datatables::of($colecao)
        ->rawColumns(['acoes'])
        ->make(true);
    }

    /**
     * Função que retorna a idade do participante
     */

    protected function calculaIdades($items)
    {
        $idades = [];

        foreach($items as $item)
        {
            $idades[$item->id] = date('Y') - date('Y', strtotime($item->nascimento));
        }

        return $idades;
    }

    public function anosResidencia(Request $request)
    {
        return date('Y') - date('Y', strtotime($request->input('inicio')));
    }

    /**
     * Gerar Relatórios
     */

    public function imprimeRelatorio(Request $request)
    {
        // echo "<pre>";
        // print_r($request->toArray());
        // exit;

        // Validar

        $this->validate($request, [
            'ordem_relatorio' => 'required',
        ]);

        // Obter todos os participantes

        $query = Participante::with('coparticipante', 'endereco', 'telefones', 'dependentes', 'coparticipante.telefones', 'coparticipante.endereco');

        // Modifica o agrupamento e ordenação da query de acordo com os dados selecionados pelo usuário

        $participantes = $this->modificaQuery($request, $query);

        // Obter todos os cabeçalhos selecionado

        $cabecalhos = $request->cabecalhos;

        // Titulo

        $titulo = [

            'geral'              => "EM ORDEM ALFABÉTICA",
            'faixa'              => "POR FAIXA DE INSCRIÇÃO",
            'idade'              => "POR IDADE",
            'sexo'               => "Por Sexo",
            'dependentes'        => "Por Número de Dependentes",
            'bairro'             => "Por Bairro",
            'tipo_deficiencia'   => "Por Tipo de Defiência",
            'idosos'             => "de participantes idosos",
            'mulher_responsavel' => "de Mulheres Chefes de Família",

        ];

        $nome_relatorio = $titulo[$request->ordem_relatorio];

        // Coleção que será enviada para o PDF

        $pessoas = $this->montaRelatorio($participantes, $cabecalhos);

        // Gerar o PDF        

        $pdf = PDF::loadView('pessoas.relatorios.geral', compact(['pessoas', 'cabecalhos', 'nome_relatorio']));

        // Enviar para o navegador

        return $pdf->stream();
    }

    /**
     * Esta função aplica agrupamento e ordenção à uma query enviada pela
     * função imprimeRelatorio.
     */

    protected function modificaQuery($request, $query)
    {
        // Verifica qual é a ordem do relatório

        // Geral, ordem alfabética dos nomes

        if($request->ordem_relatorio == 'geral')
            return $this->incluirFaixaNaQuery($query)->orderBy('nome', 'asc')->get();

        // Faixa de Inscrição

        if($request->ordem_relatorio == 'faixa')
            return $this->incluirFaixaNaQuery($query)->orderByRaw("faixa, nome")->get();

        // Idade

        if($request->ordem_relatorio == 'idade')
            return $this->incluirFaixaNaQuery($query)->orderByRaw('YEAR(STR_TO_DATE(nascimento, "%Y-%m-%d")), nome ASC')->get();        

        // Sexo

        if($request->ordem_relatorio == 'sexo')
            return $this->incluirFaixaNaQuery($query)->orderByRaw('sexo ASC, nome ASC')->get();

        // Dependentes

        if($request->ordem_relatorio == 'dependentes')
            return $this->queryDependentes($query);

        // Bairro

        if($request->ordem_relatorio == 'bairro')
            return $this->incluirFaixaNaQuery($query)->get()->sortBy(function($participante){
                return $participante->endereco->bairro;
            });

        // Relatório por tipo de deficiência

        if($request->ordem_relatorio == "tipo_deficiencia")
            return $this->incluirFaixaNaQuery($query)->where('necessidades_especiais', 1)->get();

        // Relatório por participantes idosos

        if($request->ordem_relatorio == "idosos")
            return $this->incluirFaixaNaQuery($query)->where('idoso', 1)->get();

        // Relatório por mulher 

        if($request->ordem_relatorio == "mulher_responsavel")
            return $this->incluirFaixaNaQuery($query)->where('mulher_responsavel', 1)->get();
    }

    /**
     * Esta função chama a função montaLinhaDoRelatorio uma vez para cada
     * participante enviado e retorna uma coleção contendo os dados de acordo
     * com os cabeçalhos escolhidos pelo usuário
     */

    protected function montaRelatorio($participantes, $cabecalhos)
    {
        // Coleção que será enviada para o PDF

        $pessoas = collect();

        // Iterar pelos participantes e montar cada linha do relatório de acordo
        // com os cabeçalhos escolhidos

        foreach($participantes as $participante)
        {
            $pessoas->push($this->montaLinhaDoRelatorio($participante, $cabecalhos));
        }

        return $pessoas;
    }

    /**
     * Essa função monta uma linha do relatório filtrando os dados do participante
     * e fazendo ajustes de acordo com os cabeçalhos escolhidos
     */

    protected function montaLinhaDoRelatorio($participante, $cabecalhos)
    {
        $pessoa = [];

        // Nome
        if(array_key_exists('nome', $cabecalhos) !== false)
            $pessoa['nome'] = $participante->nome;

        // Faixa
        if(array_key_exists('faixa', $cabecalhos) !== false)
            $pessoa['faixa'] = $participante->faixa;


        // Idade
        if(array_key_exists('idade', $cabecalhos) !== false)
            $pessoa['idade'] = date('Y') - date('Y', strtotime($participante->nascimento)) ." Anos";

        // Sexo
        if(array_key_exists('sexo', $cabecalhos) !== false)
            $pessoa['sexo'] = $participante->sexo;

        // Sexo
        if(array_key_exists('nascimento', $cabecalhos) !== false)
        {
            //Explodir a data de nascimento

            $data=explode("-", $participante->nascimento);

            //Inverter

            $data=array_reverse($data);

            // Implodir

            $data=implode("/", $data);

            // Atribuir

            $pessoa['nascimento'] = $data;
        }

        // PNE
        if(array_key_exists('pne', $cabecalhos) !== false)
            $pessoa['pne'] = $participante->necessidades_especiais ? "Sim" : "Não";

        // Tipo de Deficiência
        if(array_key_exists('tipo_deficiencia', $cabecalhos) !== false)
            $pessoa['tipo_deficiencia'] = $participante->tipo_deficiencia;

        // Coparticipante
        if(array_key_exists('coparticipante', $cabecalhos) !== false)
            $pessoa['coparticipante'] = count($participante->coparticipante) ? "Sim" : "Não";

        // Dependentes
        if(array_key_exists('dependentes', $cabecalhos) !== false)
            $pessoa['dependentes'] = count($participante->dependentes);

        // Bairro
        if(array_key_exists('bairro', $cabecalhos) !== false)
            $pessoa['bairro'] = $participante->endereco->bairro;

        // Telefone Fixo
        if(array_key_exists('telefone_fixo', $cabecalhos) !== false)
            $pessoa['telefone_fixo'] = $participante->telefones()->where('tipo_telefone', 'Fixo')->first()['numero'];

        // Telefone Celular
        if(array_key_exists('telefone_celular', $cabecalhos) !== false)
            $pessoa['telefone_celular'] = $participante->telefones()->where('tipo_telefone', 'Celular')->first()['numero'];

        // Endereço
        if(array_key_exists('endereco', $cabecalhos) !== false)
            $pessoa['endereco'] = $participante->endereco->logradouro." nº ".$participante->endereco->numero." - ".$participante->endereco->complemento;

        // CPF
        if(array_key_exists('cpf', $cabecalhos) !== false)
            $pessoa['cpf'] = $participante->cpf;

        // CTPS
        if(array_key_exists('ctps', $cabecalhos) !== false)
            $pessoa['ctps'] = $participante->ctps;

        // NIS
        if(array_key_exists('nis', $cabecalhos) !== false)
            $pessoa['nis'] = $participante->nis;

        // RG
        if(array_key_exists('rg', $cabecalhos) !== false)
            $pessoa['rg'] = $participante->rg;

        // CEP
        if(array_key_exists('cep', $cabecalhos) !== false)
            $pessoa['cep'] = $participante->endereco->cep;

        // E-mail
        if(array_key_exists('email', $cabecalhos) !== false)
            $pessoa['email'] = $participante->email;

        // Bolsa Família
        if(array_key_exists('bolsa_familia', $cabecalhos) !== false)
            $pessoa['bolsa_familia'] = $participante->bolsa_familia ? "Sim" : "Não" ;

        // Renda Familiar
        if(array_key_exists('renda_familiar', $cabecalhos) !== false)
            $pessoa['renda_familiar'] = "R$ ".number_format($participante->renda_familiar, 2, ",", ".");

        // Tempo de Residência
        if(array_key_exists('tempo_residencia', $cabecalhos) !== false)
            $pessoa['tempo_residencia'] = date('Y') - date('Y', strtotime($participante->tempo_residencia))." Anos";

        return $pessoa;
    }

    /**
     * Função que calcula a faixa de inscrição do participante
     */

    protected function calculaFaixa($renda)
    {
        if($renda <= 1800)
            return "1";

        elseif($renda > 1800 && $renda <= 2600)
            return "1,5";

        elseif($renda > 2600 && $renda <= 4000)
            return "2";

        elseif($renda > 4000 && $renda <= 9000)
            return "3";

        else
            return "Sem Classificação";
    }

    /**
     * Função que procura um item em um array multidimensional e retorna true ou false
     */

    protected function existeNoVetor($needle, $haystack, $strict = false) 
    {    
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->existeNoVetor($needle, $item, $strict))) 
            {
              return true;
            }
        }

        return false;
    }

    /**
     * Essa função fui criada para evitar que essa query seja escrita em todos os selects.
     * Deve ser executada em todos os selects
     */

    protected function incluirFaixaNaQuery($query)
    {
        return $query->select(DB::raw("participantes.*, renda_familiar, IF(renda_familiar <= 1800, '1', IF( renda_familiar > 1800 AND renda_familiar <= 2600, '1,5', IF(renda_familiar > 2600 AND renda_familiar <= 4000, '2', IF(renda_familiar > 4000 AND renda_familiar <= 9000, '3', 'Sem Classificação')))) as faixa"));
    }

    /**
     * A query do relatório por dependentes possui seu próprio select(), por isso não pode ser 
     * concatenada utilizando a função acima. Criei então essa função que executa apenas a query
     * desse relatório.
     */

    protected function queryDependentes($query)
    {
        return $query->select(DB::raw("participantes.*, count(dependentes.id), IF(renda_familiar <= 1800, '1', IF( renda_familiar > 1800 AND renda_familiar <= 2600, '1,5', IF(renda_familiar > 2600 AND renda_familiar <= 4000, '2', IF(renda_familiar > 4000 AND renda_familiar <= 9000, '3', 'Sem Classificação')))) as faixa"))
                        ->orderByRaw('count(dependentes.id) DESC, participantes.nome ASC')
                        ->groupBy('participantes.id')
                        ->join('dependentes', 'participantes.id', '=', 'dependentes.participante_id')
                        ->get();
    }

}