@extends('layouts.principal')

@section('cabecalho')   
    <h1>Listagem  pessoa</h1>
@endsection

@section('conteudo')
<ul>
    @foreach($pessoas as $pessoa)
        <li class=>{{$pessoa->nome}}</li>    

    @endforeach
</ul>

@endsection