@extends('layouts.main')

@section('content')
    <div class="container py-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body p-md-5 p-4">
                        <h3>Admin Login</h3>
                        @include('layouts.errors')

                        <form method="POST" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <label for="cs-inputUsername">Usuário:</label>
                                <input class="form-control" required type="text" id="cs-inputUsername" name="username">
                            </div>

                            <div class="form-group mb-4">
                                <label for="cs-inputPassword">Senha:</label>
                                <input class="form-control" required type="password" id="cs-inputPassword" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
