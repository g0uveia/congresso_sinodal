<div class="card">
    <div class="card-body p-4 p-lg-5">

        <h4 class="mb-4">Novo Pagamento</h4>

        @include('_layouts.errors')

        <form method="POST" action="/admin/pagamentos" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="inscrito_id" value="{{ $inscrito->id }}">

            <!-- Valor -->
            <div class="form-group mb-4">
                <label for="cs-inputValor">Valor:</label>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>

                    <input id="cs-inputValor" type="number" class="form-control" name="valor" min="1" step="1" value="0">

                    <div class="input-group-append">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>
            </div>

            <!-- Tipo Pagamento -->
            <div class="form-group mb-4">
                <label for="cs-selectTipoPagamento">Tipo de Pagamento:</label>
                <select name="tipo_pagamento_id" id="cs-selectTipoPagamento" class="custom-select">
                    @foreach ($tipo_pagamentos as $row)
                    <option value="{{ $row->id }}">
                        {{ $row->tipo }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- Data Pagamento -->
            <div class="form-group mb-4">
                <label for="cs-inputDataPagamento">Data do Pagamento:</label>
                <input id="cs-inputDataPagamento" type="date" class="form-control" name="data_pagamento" required>
            </div>


            <!-- Comentários -->
            <div class="form-group mb-4">
                <label for="cs-comentarios">Comentários:</label>
                <textarea id="cs-comentarios" type="text" class="form-control" name="comentarios" rows=3></textarea>
            </div>

            <!-- Comprovante -->
            <div class="form-group mb-4">
                <label>Comprovante:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cs-fileComprovante" name="comprovante" required>
                    <label class="custom-file-label" for="cs-fileComprovante">Choose file</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.custom-file-input').change(function () {
            var file = $(this)[0].files[0];
            if (file !== null) {
                $('.custom-file-label').html(file.name);
            }
        });
    });
</script>
