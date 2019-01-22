@extends('_layouts.guest')

@section('content')
    <div class="col-lg-4 col-md-6">
        <div class="row cs-box">
            <div class="col-12 cs-green-card">
                <div>
                    <img class="cs-login-logo" src="{{ asset('img/logo-branca.png') }}" alt="">
                </div>
                <div>
                    <h4>VIII CONGRESSO SINODAL</h4>
                    <h5 class="m-0">SÍNODO SUL DA BAHIA</h5>
                </div>

            </div>
            <div class="col-12 cs-white-card">
                <h3 class="text-center mb-4">ADMIN LOGIN</h3>

                @include('_layouts.errors')

                <form method="POST" class="pt-3">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input class="form-control" required type="text" id="cs-inputUsername" name="username" autofocus value="">
                            <label class="cs-label" for="cs-inputUsername">Usuário:</label>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input class="form-control" required type="password" id="cs-inputPassword" name="password" value="">
                            <label class="cs-label" for="cs-inputPassword">Senha:</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="mt-5 text-center cs-footer">
            <span>Design e Desenvolvimento por Augusto Gouveia</span>
            &nbsp|&nbsp
            <a href="{{ route('home') }}" class="text-light">
                Voltar para inscrição
            </a>
        </div>
    </div>
@endsection
