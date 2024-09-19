@extends('components.header')

@section('container')
    <div class="col-sm-12 container pt-5 justify-content-center">
        <h1 class="mb-3">Nova Categoria</h1>
        <form action="store" method="POST">
            <div class="text-black bg-light container ">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Carolina Herrera"
                            required>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success" value="Register">Salvar Categoria</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
@endsection
