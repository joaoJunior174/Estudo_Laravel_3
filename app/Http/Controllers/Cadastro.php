<?php

namespace App\Http\Controllers;

use App\ClienteTeste;
use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function salvar(Request $req)
    {

        // Validate the request...

        $cliente = new ClienteTeste();

        $cliente->name = $req['username'];
        $cliente->email = $req['email'];
        $cliente->password = $req['password'];

        $cliente->save();
 
        $clientes = null;

        return view('teste.listagem',compact('clientes'));
    }

    public function ler()
    {

        $clientes = ClienteTeste::all();

        return view('teste.listagem',compact('clientes'));
    }
}
