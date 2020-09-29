@extends('base.base')

@section('title','metodo get')

@section('conteudo')
    
    @foreach($array as $ar)
        <p>Nome: {{$ar}}</p>
    @endforeach
    
@endsection

