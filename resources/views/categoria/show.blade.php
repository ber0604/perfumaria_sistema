@extends('components.header')

@section('container')
    <div class="col-sm-12 container pt-5 justify-content-center">
        <h1 class="mb-3">Atualizar Marca</h1>
        <form action="{{ route('categoria-update') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $categoria->id }}" name="id" />

            <div class="text-black bg-light container ">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" class="form-control" value="{{$categoria->nome}}" name="nome" id="nome" placeholder="Carolina Herrera"
                            required>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success" value="Register">Salvar Mudanças</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
@endsection
