@extends('_includes.inscrito.table')

@section('table-style')
    table-striped
    table-bordered
@endsection

@section('thead-style')
    cs-bg
    text-white
@endsection

@section('ins_thead')
    <tr>
        <th class="border-primary-darken" scope="row">#</th>
        <th class="border-primary-darken" scope="row">Nome</th>
        <th class="border-primary-darken" scope="row">Email</th>
        <th class="border-primary-darken" scope="row">Presb.</th>
        <th class="border-primary-darken" scope="row">Igreja</th>
        <th class="border-primary-darken" scope="row">Inscrito desde</th>
    </tr>
@endsection
