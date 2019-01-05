$(document).ready(function() {
    $("#cs-inputCPF").mask("999.999.999-99");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /** AJAX **/
    $('#cs-selectPresbiterio').change(function() {
        $.post('/getIgrejasByPresbiterio', {'presbiterio_id': $('#cs-selectPresbiterio').val()},
            function(data){
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
