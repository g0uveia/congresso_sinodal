
    @foreach ($pagamentos as $pagamento)
        <div class="row">
            <div class="col-7">
                <h5>Valor:</h5>
                <p>R$ {{ $pagamento->valor }}</p>
                <h5>Tipo de Pagamento:</h5>
                <p>{{ $pagamento->tipoPagamento->tipo }}</p>
                <h5>Data de Pagamento:</h5>
                <p>
                    @php
                        $date = new DateTime($pagamento->data_pagamento);
                        echo $date->format('d-m-Y');
                        @endphp
                </p>
                <h5>Comentários:</h5>
                <p>{{ $pagamento->comentarios }}</p>
            </div>
            <div class="col-5">
                <a href="{{ Storage::url($pagamento->comprovante) }}">
                    <img src="{{ Storage::url($pagamento->comprovante) }}" class="img-fluid">
                </a>
                <form action="{{ route('pagamento.delete', $pagamento->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="pagamento_id" value="{{ $pagamento->id }}">
                    <button type="submit" class="btn btn-outline-danger mt-4">Deletar pagamento</button>
                </form>
            </div>
        </div>
        @if ($pagamento != $pagamentos->last())
            <hr class="my-5">
        @endif
    @endforeach
