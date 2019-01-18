<div class="modal fade" id="cs-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-4 text-center">
                <img src="{{ asset('img/success.png') }}" style="width: 50px" class="pb-4" alt="">
                <h2 class="mb-4">Inscrição Realizada</h2>
                <p>
                    Sua inscrição foi realizada com sucesso. Um email foi enviado
                    para o endereço informado, contendo as informações de pagamento.
                </p>
            </div>
        </div>
    </div>
</div>

@if(Session::has('success'))
    <script>
        $('#cs-success').modal('show');
    </script>
@endif
