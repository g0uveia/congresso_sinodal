@extends('_includes.pagamento.table')

@section('table-style')
    table-striped
    table-bordered
@endsection

@section('thead-style')
    cs-bg
    text-white
@endsection

@section('pag_thead')
    <th class="border-primary-darken" scope="row">Timestamp</th>
    <th class="border-primary-darken" scope="row">Inscrito</th>
    <th class="border-primary-darken" scope="row">Valor</th>
    <th class="border-primary-darken" scope="row">Comentários</th>
@endsection

@section('pag_tbody')
    @foreach ($pagamentos as $pagamento)
        <tr>
            <td>{{ $pagamento->created_at->diffForHumans() }}</td>
            <td><a href="{{ route('inscrito.show', $pagamento->inscrito->id) }}">{{ $pagamento->inscrito->nome }}</a></td>
            <td>R${{ $pagamento->valor }}</td>
            <td>{{ $pagamento->comentarios }}</td>
        </tr>
    @endforeach
@endsection
