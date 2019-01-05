@extends('layout.default')

@section('content')
<div class="container d-flex justify-content-center py-5">
    <div class="col-lg-4 col-md-6">
        <h2 class="pb-2">Login</h2>
        <form class="py-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="cs-inputEmail">Email:</label>
                <input id="cs-inputEmail" name="email" placeholder="ex: teste@teste.com" required type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="cs-inputCPF">CPF:</label>
                <input id="cs-inputCPF" name="cpf" placeholder="ex: xxx.xxx.xxx-xx" type="text" required class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary ml-auto btn-lg" type="submit">Entrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
