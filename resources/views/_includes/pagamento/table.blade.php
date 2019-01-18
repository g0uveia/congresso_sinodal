@if ( $num_pagamentos > 0 )
    <div class="table-responsive">
    <table class="table pb-3 @yield('table-style')">
        <thead class="@yield('thead-style')">
            @yield('pag_thead')
        </thead>

        <tbody>
            @yield('pag_tbody')
        </tbody>

        <tfoot>
            @yield('pag_tfoot')
        </tfoot>
    </table>
</div>
@else
    @include('_includes.pagamento.notfound')
@endif
