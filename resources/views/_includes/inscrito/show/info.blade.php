<div class="card h-100">
    <div class="card-body p-4 p-lg-5">
        <h3 class="mb-4">{{ $inscrito->nome }}</h3>

        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="col">Tipo de Inscrição:</th>
                    <td>{{ $inscrito->inscricao }}</td>
                </tr>
                <tr>
                    <th scope="col">Presbitério:</th>
                    <td>{{ $inscrito->igreja->presbiterio->sigla }}</td>
                </tr>
                <tr>
                    <th scope="col">Igreja:</th>
                    <td>{{ $inscrito->igreja->nome }}</td>
                </tr>
                <tr>
                    <th scope="col">Email:</th>
                    <td>{{ $inscrito->email }}</td>
                </tr>
                <tr>
                    <th scope="col">Data de Nascimento:</th>
                    <td>{{ $inscrito->dataNascimento() }}</td>
                </tr>
                <tr>
                    <th scope="col">Sexo:</th>
                    <td>{{ $inscrito->sexo }}</td>
                </tr>
                <tr>
                    <th scope="col">Inscrito desde:</th>
                    <td>{{ $inscrito->created_at->diffForHumans() }}</td>
                </tr>
            </tbody>
        </table>

        <form action="{{ route('inscrito.delete', $inscrito->id) }}" method="post">
            @csrf
            <input type="hidden" name="inscrito_id" value="{{ $inscrito->id }}">
            <button type="submit" class="btn btn-outline-danger">Excluir inscrição</button>
        </form>
    </div>
</div>
