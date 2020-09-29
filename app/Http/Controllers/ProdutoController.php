<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $array = array("joao","maria","carlos");
        return view('criar',compact('array'));
    }
    public function criar(Request $req){
        $olhaAqui = "O nome ".$req['nome']." foi registrado";
        return view('enviar',compact('olhaAqui'));
    }
    public function editar(){
        $aviso = "O codigo foi alterado";
        return view('editar',compact('aviso'));
    }
    
}
