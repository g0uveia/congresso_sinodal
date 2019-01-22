@extends('_layouts.admin')

@section('content')

<div class="container-fluid bg-white">

    <div class="cs-panel">
        <!-- Contador de Inscritos   -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="d-flex justify-content-center w-100">
                @include('_includes.inscrito.count')
            </div>
        </div>

        <!-- Contador de Dividas Quitadas  -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="d-flex justify-content-center w-100">
                @include('_includes.pagamento.countQuitados')
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="cs-container">
        <!-- Tabela Úlimos Inscritos  -->
        <div class="col-lg-8 col-md-6" style="margin-top: 30px">
            @include('_includes.inscrito.ultimos')
        </div>

        <!-- Tabela Balancete  -->
        <div class="col-lg-4 col-md-6" style="margin-top: 30px">
            @include('_includes.pagamento.balancete')
        </div>


        <!-- Gráfico Inscritos por Presbitério  -->
        <div class="col-md-4" style="margin-top: 30px">
            @include('_includes.inscrito.porPresbiterio')
        </div>

        <!-- Gráfico Inscritos por Mês  -->
        <div class="col-md-8" style="margin-top: 30px">
            @include('_includes.inscrito.porTempo')
        </div>
    </div>
</div>
@endsection
