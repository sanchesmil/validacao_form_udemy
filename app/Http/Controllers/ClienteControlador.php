<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação de dados do form
        $regras = [
            'nome' => 'required | min:3 | max:20 | unique:clientes',   // "clientes" é o nome da tabela que irá consultar
            'idade' => 'required',
            'endereco' => 'required | min:5',
            'email' => 'required | email | unique:clientes' // "clientes" é o nome da tabela que irá consultar
        ];

        $mensagens = [
            'required' => 'O campo ":attribute" deve ser informado.', // validação + genérica

            'nome.min' => 'É necessário no mínimo 3 caracteres no nome.',
            'nome.max' => 'O nome deve possuir no máximo 20 caracteres',
            'nome.unique' => 'O nome escolhido já existe na base de dados. Escolha outro nome.',

            'email.email' => 'Digite um endereço de email válido, separado por @.',
            'email.unique' => 'Já existe um usuário com este e-mail. Informe outro email.',  
        ];

        $request->validate($regras,$mensagens);


        // Validação de dados do form
        /*
        $request->validate([
            'nome' => 'required | min:3 | max:20 | unique:clientes',  // "clientes" é o nome da tabela que irá consultar
            'idade' => 'required',
            'endereco' => 'required | min:5',
            'email' => 'required | email | unique:clientes'
            ]);
        */

        // Criação do Cliente
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->idade = $request->idade;
        $cliente->endereco = $request->endereco;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect('/');
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
}
