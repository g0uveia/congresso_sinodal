@extends('_layouts.admin')

@section('content')
    <div class="container p-5">

        @include('_includes.back.inscritos')

        <div class="row">
            <div class="col-lg-6 mb-4">
                @include('_includes.inscrito.show.info')
            </div>
            <div class="col-lg-6 d-flex justify-content-between flex-column">
                @include('_includes.inscrito.show.graficos')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                @include('pagamento.create')
            </div>
            <div class="col-lg-6 mb-4">
                @include('_includes.pagamento.inscrito')
            </div>
        </div>
    </div>
@endsection
