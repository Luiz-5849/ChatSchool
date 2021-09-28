+$(document).ready(function(){

    $('#login').click(function(){
        var dados = $('#dados_login').serialize();

        $.ajax ({
            method: 'GET',
            url: 'cruds/valida_login.php',
            data: dados,
        })

        .done(function(msg)
        {
            if (msg == "y") 
            {
                location.href = 'cruds/verifica.php';
                
            }
            else
            {
                $('.signup_link').html("Email ou senha inválidos");
            }
        })
        return false;
    })
});
