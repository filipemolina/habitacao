<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // Exigir que o usuário esteja logado ao acessar esse controller

    public function __construct()
    {
        $this->middleware(['auth', 'is_master']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mostrar a lista de usuários

        $usuarios = User::all();

        return view('users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostrar tela de criar usuário

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'admin'    => 'required',
        ]);

        $user = User::create($request->all());

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect("/users/create")->with('sucesso', 'Usuário cadastrado com sucesso.');
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
        $usuario = User::find($id);

        return view("users.edit", compact('usuario'));
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
        // Validar

        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users,email,'.$id,
            'admin'    => 'required',
        ]);

        // Obter o usuário

        $usuario = User::find($id);

        // Atualizar as informações

        $usuario->update($request->all());

        // Retornar com mensagem de sucesso

        return redirect("/users/$usuario->id/edit")->with('sucesso', 'Informações do usuário atualizadas com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();
    }

    /**
     * Função para alterar a senha do usuário atual
     */

    public function alterarSenha(Request $request)
    {
        $this->validate($request, [
            'senhaatual' => 'required|logado|min:6',
            'novasenha'  => 'required|confirmed',
        ]);

        $usuario = User::find(Auth::user()->id);

        $usuario->password = Hash::make($request->novasenha);

        $usuario->save();

        return redirect('/mudarsenha')->with('sucesso', 'Senha alterada com sucesso.');
    }
}
