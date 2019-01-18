$(document).ready(function() {
    $('#cs-navbar-toggler').click(function (event) {
        event.preventDefault();

        $('.cs-navbar').toggle("slow");

        if ($(this).find('i').html() == 'toggle_off') {
            $(this).find('i').html('toggle_on');
        } else {
            $(this).find('i').html('toggle_off');
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
