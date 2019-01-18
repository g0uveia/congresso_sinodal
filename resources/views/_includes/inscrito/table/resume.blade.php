@extends('_includes.inscrito.table')

@section('table-style')
    table-bordered
@endsection

@section('thead-style')
    thead-light
@endsection

@section('ins_thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col"></th>
    </tr>
@endsection

@section('ins_tbody')
    @foreach ($inscritos as $inscrito)
        <tr>
            <th scope="row">{{ $inscrito->id }}</th>
            <td><a href="{{ route('inscrito.show', $inscrito->id) }}">{{ $inscrito->nome }}</a></td>
            <td>{{ $inscrito->created_at->diffForHumans() }}</td>
        </tr>
    @endforeach
@endsection
