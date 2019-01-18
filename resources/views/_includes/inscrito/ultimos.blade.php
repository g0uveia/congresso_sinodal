<div class="card p-md-3 p-2">
    <div class="card-body">
        <h3 class="pb-3">Últimas Inscrições</h3>

        <div class="table-responsive-md">
            @include('_includes.inscrito.table.resume')
        </div>

        <a href="{{ route('inscrito.index') }}" class="btn  btn-primary btn-block">
            Ver todos
        </a>
    </div>
</div>
