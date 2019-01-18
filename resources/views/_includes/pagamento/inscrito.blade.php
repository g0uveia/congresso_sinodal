<div class="card">
    <div class="card-body p-4 p-lg-5">
        <h4 class="mb-5">Pagamentos Realizados</h4>
        @if ($num_pagamentos > 0)
            @include('_includes.pagamento.table.inscrito')
        @else
            @include('_includes.pagamento.notfound')
        @endif
    </div>
</div>
