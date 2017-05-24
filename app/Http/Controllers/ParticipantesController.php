<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participante;
use App\Coparticipante;
use App\Telefone;
use App\Endereco;
use App\Dependente;
use Datatables;

class ParticipantesController extends Controller
{
    // Exigir que o usuário esteja logado para acessar essa view

    public function __construct()
    {
        $this->middleware('auth');
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
            'inicio-residencia'                     => 'required',

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

        return redirect('/pessoas/create')->with('sucesso', 'Usuário cadastrado com sucesso');
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

        return view('pessoas.show', compact('pessoa'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

        foreach($participantes as $participante)
        {
            $colecao->push([
                'nome'                   => $participante->nome,
                'idade'                  => date('Y') - date('Y', strtotime($participante->nascimento)),
                'sexo'                   => $participante->sexo,
                'necessidades_especiais' => $participante->necessidades_especiais ? "Sim" : "Não",
                'coparticipante'         => count($participante->coparticipante) ? "Sim" : "Não",
                'dependentes'            => count($participante->dependentes),
                'bairro'                 => $participante->endereco->bairro,
                'acoes'                  => "<a class='btn btn-success btn-xs' href='" . url("/pessoas/$participante->id") .  "'><i class='fa fa-eye'></i></a><a class='btn btn-warning btn-xs' href='".url("pessoas/$participante->id/edit")."'><i class='fa fa-pencil'></i></a><a class='btn btn-danger btn-xs'  href='#'' data-toggle='modal' data-target=''><i class='fa fa-trash'></i></a>"
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

}