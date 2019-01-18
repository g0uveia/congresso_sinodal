@extends('_includes.pagamento.table')

@section('pag_thead')
    <th scope="row">Tipo de Pagamento</th>
    <th scope="row">Valor</th>
@endsection

@section('pag_tbody')
    @foreach ($tipos_pagamento as $tipo)
        <tr>
            <td>{{ $tipo->tipo }}</td>
            <td>R$ {{ number_format($tipo->valorTotal(), 2) }}</td>
        </tr>
    @endforeach
@endsection

@section('pag_tfoot')
    <tr style="background: #D7EFE6">
        <th scope="col">Total:</th>
        <td>R$ {{ number_format($saldo, 2) }}</td>
    </tr>
@endsection
