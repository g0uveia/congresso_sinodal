@extends('_layouts.guest')

@section('content')
    <div class="col-lg-8">
        <div class="row cs-box">
            <div class="col-lg-5 col-md-6 cs-green-card">
                <div>
                    <h3>VIII CONGRESSO SINODAL</h3>
                    <h4>SÍNODO SUL DA BAHIA</h4>
                </div>

                <div>
                    <img class="my-5" src="{{ asset('img/logo-branca.png') }}" alt="">
                </div>

                <h4 class="mt-2">07, 08 E 09 DE JUNHO DE 2019</h4>
            </div>
            <div class="col-lg-7 col-md-6 cs-white-card">
                <h2 class="mb-4 text-center">INSCRIÇÃO</h2>

                <form class="form" action="/inscricao" method="post">

                    @include('_layouts.errors')
                    @include('_includes.sucesso')

                    <fieldset data-step='1'>
                        @csrf
                        <!-- Nome -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input class="form-control" placeholder="ex: Maria das Graças Anunciação Silva" autofocus required minlength="12" type="text" id="cs-inputNome" name="nome" value="{{ old('nome') }}">
                                <label for="cs-inputNome" class="cs-label">Nome Completo:</label>
                            </div>
                            <small class="form-text text-danger"></small>

                        </div>

                        <!-- Data de Nascimento -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input class="form-control" required max="2019-01-01" type="date" name="nascimento" value="{{ old('nascimento') }}">
                                <label for="cs-inputNascimento" class="cs-label">Data de Nascimento:</label>
                            </div>
                            <small class="form-text text-danger"></small>

                        </div>

                        <!-- Sexo -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <select class="custom-select" name="sexo" id="cs-selectSexo" value="{{ old('sexo') }}">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                                <label for="cs-selectSexo" class="cs-label">Sexo:</label>
                            </div>
                            <small class="form-text text-danger"></small>

                        </div>

                        <!-- Email -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input class="form-control" placeholder="exemplo@exemplo.com" required type="email" id="cs-inputEmail" name="email" value="{{ old('email') }}">
                                <label class="cs-label"  for="cs-inputEmail">Email:</label>
                            </div>
                            <small class="form-text text-danger"></small>
                        </div>

                        <div class="form-group">
                            <button type="button" id="btn-prox" class="btn btn-primary btn-block mt-1">
                                PRÓXIMO
                            </button>
                        </div>

                    </fieldset>

                    <fieldset data-step='2' class="">
                        <!-- Presbitério -->
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <select id="cs-selectPresbiterio" class="custom-select" name="presbiterio" value="{{ old('presbiterio') }}">
                                    @foreach ($presbiterios as $presbiterio)
                                        <option value="{{$presbiterio->id}}">{{$presbiterio->sigla}}</option>
                                    @endforeach
                                </select>
                                <label class="cs-label" for="cs-selectPresbiterio">Presbitério:</label>
                            </div>
                        </div>

                        <!-- Igreja -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <select id="cs-selectIgreja" class="custom-select" name="igreja" value="{{ old('igreja') }}">
                                    @foreach ($igrejas as $igreja)
                                        <option value="{{$igreja->id}}">{{$igreja->nome}}</option>
                                    @endforeach
                                </select>
                                <label class="cs-label" for="cs-selectIgreja">Igreja:</label>
                            </div>
                        </div>

                        <!-- Tipo de Inscrição -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <select id="cs-selectInscricao" class="custom-select" name="inscricao"  value="{{ old('inscricao') }}">
                                    <option>Delegado</option>
                                    <option>Visitante</option>
                                </select>
                                <label class="cs-label" for="cs-selectInscricao">Tipo de Inscrição:</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-block mb-3" type="submit">INSCREVER-SE</button>
                            <button type="button" id="btn-voltar" class="btn btn-outline-secondary btn-block">
                                VOLTAR
                            </button>
                        </div>


                    </fieldset>
                </form>

                <span class="cs-steps">
                    <span data-step='1'></span>
                    <span data-step='2'></span>
                </span>
            </div>
        </div>
        <div class="mt-5 text-center cs-footer">
            <span>Design e Desenvolvimento por Augusto Gouveia</span>
            &nbsp|&nbsp
            <a href="{{ route('login') }}" class="text-light">
                Módulo Admin
            </a>
        </div>
    </div>
@endsection
