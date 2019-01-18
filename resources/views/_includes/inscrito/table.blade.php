@if ( $num_inscritos > 0 )
    <div class="table-responsive">
        <table class="table pb-3 @yield('table-style')">
            <thead class="@yield('thead-style')">
                @yield('ins_thead')
            </thead>

            <tbody>
                @yield('ins_tbody')
            </tbody>
        </table>
    </div>
@else
    @include('_includes.inscritos.notfound')
@endif
