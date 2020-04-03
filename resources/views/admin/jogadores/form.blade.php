@extends('admin.layouts.principal')

@section('titulo', 'Cursos')

@section('acao', 'Formulário')

@section('conteudo-principal')

    <form method="post" action="">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control" type="text" name="nome">
        </div>

        <button class="btn btn-primary">Salvar</button>

    </form>

@endsection
