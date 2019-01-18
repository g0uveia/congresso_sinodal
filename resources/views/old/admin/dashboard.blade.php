@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mb-5">
        <div class="col-lg-3 col-6">
            <div class="d-flex justify-content-center w-100">
                @include('inscritos.count')
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="d-flex justify-content-center w-100">
                @include('pagamentos.quitados')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8" style="margin-bottom: 30px">
            @include('inscritos.ultimos')
        </div>
        <div class="col-lg-4" style="margin-bottom: 30px">
            @include('pagamentos.balancete')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6" style="margin-bottom: 30px">
            @include('inscritos.porPresbiterio')
        </div>
        <div class="col-lg-6">
            @include('inscritos.porTempo')
        </div>
    </div>
@endsection
