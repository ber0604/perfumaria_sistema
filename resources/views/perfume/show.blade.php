@extends('components.header')

@section('container')
    <div class="col-sm-12 container pt-5 justify-content-center">
        <h1 class="mb-3">Editar Perfume</h1>
        <form action="{{ route('perfume-update') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $perfume->id }}" name="id" />

            <div class="text-black bg-light container ">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" class="form-control" value="{{$perfume->nome}}" name="nome" id="nome" placeholder=""
                            required>
                    </div>

                    <div class="col-12">
                        <label for="quantidade" class="form-label">Quantidade(ml)</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" value="{{$perfume->quantidade}}" name="quantidade" id="quantidade"
                                placeholder="" required>

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="sexo" class="form-label">Sexo</label>
                        <div class="input-group has-validation">
                           <select name="sexo" value="{{$perfume->sexo}}">
                            <option value="0"></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Unissex">Unissex</option>
                           </select>

                        </div>
                    </div>
                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <div class="input-group has-validation">
                           <select name="status" value="{{$perfume->status}}">
                            <option value="0"></option>
                            <option value="1">Em Estoque</option>
                            <option value="2">Vendido</option>
                           </select>

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Tipo </label>
                        <input type="tipo" class="form-control" id="tipo" name="tipo" value="{{$perfume->tipo}}"
                            placeholder="">
                    </div>

                    <div class="col-12">
                        <label for="preco_pago" class="form-label">Preço Pago</label>
                        <input type="text" class="form-control"  name="preco_pago" id="preco_pago" value="{{$perfume->preco_pago}}"
                            placeholder="" required >
                    </div>
                    <div class="col-12">
                        <label for="preco_vendido" class="form-label">Preço Vendido</label>
                        <input type="text" class="form-control"  name="preco_vendido" id="preco_vendido" value="{{$perfume->preco_vendido}}"
                            placeholder="" required >
                    </div>
                    <div class="col-12">
                        <label for="categoria_id" class="form-label">Categoria</label>
                           <select name="categoria_id" value="{{$perfume->categoria_id}}">
                            <option value="0"></option>
                            @foreach ($categorias as $categoria )
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                           </select>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success" value="Register">Salvar Mudanças</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
@endsection
