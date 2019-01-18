<div class="card p-md-3 p-2 h-100">
    <div class="card-body d-flex flex-column justify-content-between">
        <div>
        <h3 class="pb-3">Balancete</h3>


            <div class="table-responsive-md">
                @include('_includes.pagamento.table.resume')
            </div>
        </div>
            <a href="{{ route('pagamento.index') }}" class="btn btn-primary btn-block">
                Ver Histórico
            </a>



    </div>
</div>
