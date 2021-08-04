@extends('layouts.principal')

@section('cabecalho')   
    <h1>Listagem  pessoa</h1>
@endsection

@section('conteudo')
<a href="{{ route('cadastrarpessoa')}}">Cadastrar pessoa</a>

    @if(count($pessoas) > 0)
        <ul>
            @foreach($pessoas as $pessoa)
                <li>
                    {{ $pessoa->nome }}
                    <a href="{{ route('editarpessoa', ['id'=> $pessoa->id])}}">EDITAR</a>
                    <a href="{{ route('deletarpessoa', ['id'=> $pessoa->id])}}">DELETAR</a>                   
                </li>
            @endforeach
        </ul>
    @else
        Não há pessoas para listar.
    @endif

@endsection