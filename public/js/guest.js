$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });

    $('input').change(function() {
        if ($(this).val() !== "") {
            $(this).next('.cs-label').addClass("up");
        } else {
            $(this).next('.cs-label').removeClass("up");
        }
    });

    currentPage = 1;

    $('.cs-steps span[data-step=' + currentPage + ']').addClass('active');
    $('fieldset:not([data-step=' + currentPage + '])').hide();

    $('#btn-voltar').click(function () {
        $("fieldset[data-step=" + currentPage + "]").toggle();
        $('.cs-steps span[data-step=' + currentPage + ']').removeClass('active');

        $("fieldset[data-step=" + --currentPage + "]").toggle();
        $('.cs-steps span[data-step=' + currentPage + ']').addClass('active');
    });

    $('#btn-prox').click(function () {
        $(".form").validate({
            messages: {
                nome: "Por favor, informe seu nome completo",
                nascimento: "Verifique a data de nascimento",
                email: "Por favor, informe um email válido"
            },
            errorPlacement: function(error, element) {
                error.appendTo( element.parent("div").parent("div").find(".form-text") );
            }
        });

        if ($(".form").valid()) {
            $("fieldset[data-step=" + currentPage + "]").toggle();
            $('.cs-steps span[data-step=' + currentPage + ']').removeClass('active');

            $("fieldset[data-step=" + ++currentPage + "]").toggle();
            $('.cs-steps span[data-step=' + currentPage + ']').addClass('active');

        }
    });

    $('.cs-steps span').click(function () {
        if(currentPage == 1 || $(this).data('step') == 2 ) {
            $('#btn-prox').click();
        } else if (currentPage == 2 || $(this).data('step') == 1) {
            $('#btn-voltar').click();
        }
    });




    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#cs-selectPresbiterio').change(function() {
        $.post('/getIgrejasByPresbiterio', {
                'presbiterio_id': $('#cs-selectPresbiterio').val()
            },
            function(data) {
                json = JSON.parse(data);
                options = '';
                json.forEach(function(item) {
                    options += '<option value="' + item.id + '">' + item.nome + '</option>'
                });
                $("#cs-selectIgreja").html(options);
                console.log(json);
            }
        );
    });
});
