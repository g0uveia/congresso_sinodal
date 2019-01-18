<div class="cs-navbar-container">
    <!-- Vertical -->
    <nav class="cs-navbar">
        <!-- Header  -->
        <a href="{{ route('admin.dashboard') }}" class="cs-navbar-brand">
            <img class="cs-navbar-brand-logo" src="{{ asset('img/logo-branca.png') }}" alt="">
            <h2 class="cs-navbar-brand-title">VIII Congresso Sinodal</h2>
            <h3 class="cs-navbar-brand-subtitle">Sínodo Sul da Bahia</h3>
        </a>

        <ul class="cs-navbar-nav">
            <!-- Dashboard  -->
            <li class="cs-navbar-item">
                <a class="cs-navbar-link {{  Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Lista de Inscritos  -->
            <li class="cs-navbar-item">
                <a class="cs-navbar-link {{  (Route::is('inscrito.index') || Route::is('inscrito.show')) ? 'active' : '' }}" href="{{ route('inscrito.index') }}">
                    <i class="material-icons">contacts</i>
                    <span>Lista de Inscritos</span>
                </a>
            </li>

            <!-- Histórico de Pagamentos  -->
            <li class="cs-navbar-item">
                <a class="cs-navbar-link {{  Route::is('pagamento.index') ? 'active' : '' }}" href="{{ route('pagamento.index') }}">
                    <i class="material-icons">receipt</i>
                    <span>Histórico de Pagamentos</span>
                </a>
            </li>

            <!-- Sair  -->
            <li class="cs-navbar-item">
                <a class="cs-navbar-link" href="{{ route('admin.logout') }}">
                    <i class="material-icons">exit_to_app</i>
                    <span>Sair</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Horizontal  -->
    <nav class="cs-navbar-hr">
        <a id="cs-navbar-toggler" href="#">
            <i class="material-icons">toggle_off</i>
        </a>

        <a class="cs-navbar-brand" href="#">
            <img class="cs-navbar-brand-logo" src="{{ asset('img/logo-branca.png') }}" alt="">
        </a>

    </nav>

</div>
