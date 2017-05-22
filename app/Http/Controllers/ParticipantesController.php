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

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // exit;

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

            // Coparticipante

            'coparticipante.nome'                   => 'required',
            'coparticipante.cpf'                    => 'required|unique:coparticipantes,cpf',
            'coparticipante.bolsa_familia'          => 'required',
            'coparticipante.rg'                     => 'required',
            'coparticipante.orgao_emissor_rg'       => 'required',
            'coparticipante.emissao_rg'             => 'date',
            'coparticipante.nascimento'             => 'date',
            'coparticipante.sexo'                   => 'required',
            'coparticipante.necessidades_especiais' => 'required',
            'coparticipante.cep'                    => 'required',
            'coparticipante.logradouro'             => 'required',
            'coparticipante.numero'                 => 'required',
            'coparticipante.bairro'                 => 'required',


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
            $participante->dependentes()->save(new Dependente($dependente));
        }

        // Coparticipante

        $coparticipante = $participante->coparticipante()->save(new Coparticipante($request->coparticipante));

        // Endereço do Coparticipante

        $coparticipante->endereco()->save(new Endereco($request->input('coparticipante')));

        // Telefones do Coparticipante

        foreach($request->input('coparticipante.telefones') as $telefone)
        {
            $coparticipante->telefones()->save(new Telefone($telefone));
        }

        // return redirect('/pessoas/create');

        $pa = Participante::find($participante->id);

        echo "<pre>";
        print_r($pa->toArray());
        print_r($pa->endereco->toArray());
        print_r($pa->telefones->toArray());
        print_r($pa->dependentes->toArray());
        print_r($pa->coparticipante->toArray());
        print_r($pa->coparticipante->endereco->toArray());
        echo "</pre>";
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
                'acoes'                  => "<a class='btn btn-success btn-xs' href='#''><i class='fa fa-eye'></i></a><a class='btn btn-warning btn-xs' href='".url("pessoas/$participante->id/edit")."'><i class='fa fa-pencil'></i></a><a class='btn btn-danger btn-xs'  href='#'' data-toggle='modal' data-target=''><i class='fa fa-trash'></i></a>"
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

}