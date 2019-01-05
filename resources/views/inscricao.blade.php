@extends('layout.default')

@section('content')
    <div class="container py-3">
        <h2 class="pb-2">Inscrição</h2>

        <form method="post">
            @csrf
            <div class="row py-3">
                <div class="col-md-6">
                    <!-- Nome -->
                    <div class="form-group">
                        <label for="cs-inputNome">Nome Completo:</label>
                        <input class="form-control" placeholder="ex: Maria das Graças Anunciação Silva" autofocus required type="text" id="cs-inputNome" name="nome">
                    </div>

                    <!-- CPF -->
                    <div class="form-group">
                        <label for="cs-inputCPF">CPF:</label>
                        <input class="form-control" placeholder="xxx.xxx.xxx-xx" required type="text" id="cs-inputCPF" name="cpf">
                        <small id="cpfHelp" class="form-text text-muted">Caso não possuir, informar CPF de responsável</small>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="form-group">
                        <label for="cs-inputNascimento">Data de Nascimento:</label>
                        <input class="form-control" required type="date" name="nascimento">
                    </div>

                    <!-- Sexo -->
                    <div class="form-group">
                        <label for="cs-selectSexo">Sexo:</label>
                        <select class="custom-select" name="sexo" id="cs-selectSexo">
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="cs-inputEmail">Email:</label>
                        <input class="form-control" placeholder="exemplo@exemplo.com" required type="Email" id="cs-inputEmail" name="email">
                    </div>

                    <!-- Presbitério -->
                    <div class="form-group">
                        <label for="cs-selectPresbiterio">Presbitério:</label>
                        <select id="cs-selectPresbiterio" class="custom-select" name="presbiterio">
                            @foreach ($presbiterios as $presbiterio)
                                <option value="{{$presbiterio->id}}">{{$presbiterio->sigla}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Igreja -->
                    <div class="form-group pb-2">
                        <label for="cs-selectIgreja">Igreja:</label>
                        <select id="cs-selectIgreja" class="custom-select" name="igreja">
                            @foreach ($igrejas as $igreja)
                                <option value="{{$igreja->id}}">{{$igreja->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tipo de Inscrição -->
                    <div class="form-group">
                        <label>Tipo de Inscrição:</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="cs-radioDelegado" checked name="inscricao" value="Delegado" class="custom-control-input">
                            <label class="custom-control-label" for="cs-radioDelegado">Delegado</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="cs-radioVisitante" name="inscricao" value="Visitante" class="custom-control-input">
                            <label class="custom-control-label" for="cs-radioVisitante">Visitante</label>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-lg btn-primary" type="submit">Inscrever-se</button>
                </div>
            </div>
        </form>
    </div>
@endsection
