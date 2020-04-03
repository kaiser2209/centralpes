{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Jogadores')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}
<a href="{{route('jogadores.form_adicionar')}}" class="btn btn-primary mt-n4 mb-2 float-right">
    Adicionar
</a>

<table class="table table-hover">
    @forelse ($jogadores as $jogador)
        <tr class="d-flex">
            <td class="flex-shrink-1">{!!$pos[$jogador->posicao - 1]!!}</td>
            <td class="flex-shrink-1">{{$jogador->overall}}</td>
            <td class="flex-shrink-1" style="vertical-align: top;"><img style="height: 24px" src="{{asset('img/' . $jogador->bandeira)}}"></td>
            <td class="flex-grow-1">{{$jogador->nome}}</td>
            <td class="justify-content-end">
                <span class="btn btn-info btn-sm" title="Editar">
                    <i class="fas fa-edit fa-fw"></i>
                </span>
                <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                    <i class="far fa-trash-alt fa-fw"></i>
                </button>
            </td>
        </tr>
    @empty
        <tr>
            {{-- <td><img src="{{ asset('img/arsenal.svg') }}"></td> --}}
        </tr>
    @endforelse

</table>

@endsection
