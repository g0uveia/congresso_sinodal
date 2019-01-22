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

});
