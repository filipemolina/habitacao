<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participante;

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
        echo "<pre>";
        print_r($request->all());
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