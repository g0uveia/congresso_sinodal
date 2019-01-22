@extends('_layouts.guest')

@section('content')
    <div class="col-xl-5 col-md-8">
        <div class="row cs-box">
            <div class="col-12 cs-green-card ">
                <div>
                    <img class="cs-login-logo" src="{{ asset('img/logo-branca.png') }}" alt="">
                </div>
                <div>
                    <h4>VIII CONGRESSO SINODAL</h4>
                    <h5 class="m-0">SÍNODO SUL DA BAHIA</h5>
                </div>

            </div>
            <div class="cs-white-card col px-5">
                <h3 class="mb-4">Olá, {{ $inscrito->nome }}</h3>

                <p>Você se inscreveu recentemente como {{ kebab_case($inscrito->inscricao) }} no VIII
                Congresso Sinodal das Sociedades Internas do Sínodo Sul da Bahia.</p>
                <p>A taxa do congresso é de R$ 190,00 e deverá ser depositada ou transferida na conta abaixo.</p>

                <div class="jumbotron my-2 py-4">
                    <ul class="m-0">
                        <li><span style="font-weight: 500">Banco do Brasil</span></li>
                        <li><span style="font-weight: 500">Agência:</span> 1029-4</li>
                        <li><span style="font-weight: 500">Conta-Corrente:</span> 18238-9</li>
                        <li><span style="font-weight: 500">Favorecido:</span> Sínodo Sul da Bahia</li>
                    </ul>
                </div>

                <p class="py-4">É sugerido que o pagamento seja realizado em quatro parcelas nos meses de fevereiro
                a maio (3x de R$ 50,00 e 1x de R$ 40,00).</p>

                <p>Em Cristo,<br>
                Sínodo Sul da Bahia</p>
            </div>
        </div>
        <div class="mt-5 text-center cs-footer">
            <span>Design e Desenvolvimento por Augusto Gouveia</span>
        </div>
    </div>
@endsection
