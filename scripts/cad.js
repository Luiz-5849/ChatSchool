$(document).ready(function(){

    $('#cadastrar').click(function(){
        var dados = $('#form').serialize();

        $.ajax ({
            method: 'POST',
            url: 'cruds/primeiro_acesso.php',
            data: dados,
        })

        .done(function(msg)
        {
            if(msg == "y"){
                location.href = 'cruds/verifica.php';
            }
            else{
                if(msg == "n"){
                    $('#resultII').html("Esse apelido já existe, por favor insira outro");
                    $('#resultI').html("");
                }else{
                    if(msg == "e"){
                        $('#resultI').html("Esse email já existe, por favor insira outro");
                        $('#resultII').html("");
                    }
                }
            }
        })
        return false;
    })
});