@extends('components.header')


@section('container')
    <div class="container-layout container">
        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Preço Pago</th>
                    <th class="text-center">Preço Vendido</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                    @endphp

                    @foreach  ($perfumesLucro as $perfume)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $perfume->nome }}</td>
                        <td class="text-center"> {{ $perfume->status }}</td>
                        <td class="text-center"> R$ {{ $perfume->preco_pago }}</td>
                        <td class="text-center"> R$ {{ $perfume->preco_vendido }}</td>
                    </tr>
                    @endforeach
            </tbody>
            <thead>
                <tr>
                    <th class="text-center">Lucro Total</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="text-center"> R$ {{ $lucro_total }}0 </td>
                        <td class="text-center"> </td>
                        <td class="text-center"> </td>
                        <td class="text-center"> </td>
                        <td class="text-center"> </td>
                    </tr>
            </tbody>
        </table>
    </div>

@endsection
