@extends('_includes.pagamento.table')

@section('table-style')
    table-striped
    table-hover
    cs-table-porinsc
@endsection

@section('thead-style')
    bg-primary
    text-white
@endsection

@section('pag_thead')
    <th scope="row">#</th>
    <th scope="row">Inscrito</th>
    <th scope="row">Presbiterio</th>
    <th scope="row">Igreja</th>
    <th scope="row">Valor</th>
    <th scope="row"></th>
@endsection

@section('pag_tbody')
    @foreach ($saldo_por_inscrito as $row)
        <tr>
            <th scope="col">{{ $row["inscrito"]->id }}</th>
            <td>{{ $row["inscrito"]->nome }}</td>
            <td>{{ $row["inscrito"]->igreja->presbiterio->sigla }}</td>
            <td>{{ $row["inscrito"]->igreja->nome }}</td>
            <td>R${{ number_format($row["valor"], 2) }}</td>
            <td><a href="{{ route('pagamento.create', $row["inscrito"]->id) }}" class="cs-table-action hidden">
                <i class="material-icons align-middle">add_circle</i>
            </a></td>
        </tr>
    @endforeach
@endsection
