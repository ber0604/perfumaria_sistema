@extends('components.header')

@section('container')
    <div class="col-sm-12 container pt-5 justify-content-center">
        <h1 class="mb-3">Novo Perfume</h1>
        <form action="store" method="POST">
            <div class="text-black bg-light container ">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Ferrari"
                            required>
                    </div>

                    <div class="col-12">
                        <label for="categoria_id" class="form-label">Marca</label>
                           <select name="categoria_id" class="form-control" >
                            <option value="0"></option>
                            @foreach ($categorias as $categoria )
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                           </select>
                    </div>

                    <div class="col-12">
                        <label for="quantidade" class="form-label">Quantidade(ml)</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" name="quantidade" id="quantidade"
                                placeholder="150 ml" required>

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="sexo" class="form-label">Sexo</label>
                        <div class="input-group has-validation">
                           <select name="sexo" class="form-control" >
                            <option value="3"></option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Unissex</option>
                           </select>

                        </div>
                    </div>
                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <div class="input-group has-validation">
                           <select name="status" class="form-control" >
                            <option value="0"></option>
                            <option value="1">Em Estoque</option>
                            <option value="2">Vendido</option>
                           </select>

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Tipo </label>
                        <input type="tipo" class="form-control" id="tipo" name="tipo"
                            placeholder="">
                    </div>

                    <div class="col-12">
                        <label for="preco_pago" class="form-label">Preço Pago</label>
                        <input type="text" class="form-control"  name="preco_pago" id="preco_pago"
                            placeholder="R$100,00" required >
                    </div>
                    <div class="col-12">
                        <label for="preco_vendido" class="form-label">Preço Vendido</label>
                        <input type="text" class="form-control"  name="preco_vendido" id="preco_vendido"
                            placeholder="R$100,00" required >
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success" value="Register">Salvar Perfume</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
@endsection
