$(document).ready(function(){

    $('#seguir').click(function(){
        var dados = $('#seguir_form').serialize();

        $.ajax ({
            method: 'POST',
            url: '../cruds/toFollow.php',
            data: dados,
        })

        .done(function(msg)
        {
            alert(msg);
        })
        return false;
    })
});