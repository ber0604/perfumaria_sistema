@extends('components.header')


@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top form-control" href="{{route('categoria-create')}}">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                    @endphp

                    @foreach  ($categorias as $categoria)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $categoria->nome }}</td>
                        <td class="text-center">
                            <a class="bi bi-pencil-square text-black" href="/categorias/show/{{$categoria->id}}">Editar</a>
                            <a class="bi bi-trash3 text-black" href="{{ route('categoria-destroy', $categoria->id)}}">Remover</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

@endsection
