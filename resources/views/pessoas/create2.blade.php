
@extends('layout')

@section('conteudo')

<form action="{{route('cadastrarpessoa')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2">
            <label for="cpf">CPF</label>
            <input type="number" class="form-control" name="cpf" id="cpf">
        </div>

        <div class="col col-2">
            <label for="data">Data Nascimento</label>
            <input type="date" class="form-control" name="data" id="data">
        </div>
    </div>   

    <button class="btn btn-primary mt-xl-2">Adicionar</button>
</form>
@endsection