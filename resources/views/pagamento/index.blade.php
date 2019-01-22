@extends('_layouts.admin')

@section('content')
    <div class="container bg-white p-5  mt-5">

        @include('_includes.back.dashboard')

        <h2 class="mt-1 mb-4">Histórico de Pagamentos</h2>
        @include('_includes.pagamento.table.complete')
        {{ $pagamentos->links() }}

    </div>
@endsection
