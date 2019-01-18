@extends('layouts.main')

@section('content')
<h2 class="pb-2">Inscrição</h2>

<form method="post">
    @csrf
    @include('layouts.errors')
    @include('layouts.sucesso')
    <div class="row py-3">
        <div class="col-md-6">
            <!-- Nome -->
            <div class="form-group">
                <label for="cs-inputNome">Nome Completo:</label>
                <input class="form-control" placeholder="ex: Maria das Graças Anunciação Silva" autofocus required type="text" id="cs-inputNome" name="nome" value="{{ old('nome') }}">
            </div>

            <!-- Data de Nascimento -->
            <div class="form-group">
                <label for="cs-inputNascimento">Data de Nascimento:</label>
                <input class="form-control" required type="date" name="nascimento" value="{{ old('nascimento') }}">
            </div>

            <!-- Sexo -->
            <div class="form-group">
                <label for="cs-selectSexo">Sexo:</label>
                <select class="custom-select" name="sexo" id="cs-selectSexo" value="{{ old('sexo') }}">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="cs-inputEmail">Email:</label>
                <input class="form-control" placeholder="exemplo@exemplo.com" required type="Email" id="cs-inputEmail" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="col-md-6">


            <!-- Presbitério -->
            <div class="form-group">
                <label for="cs-selectPresbiterio">Presbitério:</label>
                <select id="cs-selectPresbiterio" class="custom-select" name="presbiterio" value="{{ old('presbiterio') }}">
                    @foreach ($presbiterios as $presbiterio)
                        <option value="{{$presbiterio->id}}">{{$presbiterio->sigla}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Igreja -->
            <div class="form-group">
                <label for="cs-selectIgreja">Igreja:</label>
                <select id="cs-selectIgreja" class="custom-select" name="igreja" value="{{ old('igreja') }}">
                    @foreach ($igrejas as $igreja)
                        <option value="{{$igreja->id}}">{{$igreja->nome}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tipo de Inscrição -->
            <div class="form-group mb-4">
                <label for="cs-selectInscricao">Tipo de Inscrição:</label>
                <select id="cs-selectInscricao" class="custom-select" name="inscricao"  value="{{ old('inscricao') }}">
                    <option>Delegado</option>
                    <option>Visitante</option>
                </select>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary" type="submit">Inscrever-se</button>
            </div>
        </div>
    </div>
</form>
@endsection
