$(document).ready(function(){

    $('#cadastrar').click(function(){
        var dados = $('#form').serialize();

        $.ajax ({
            method: 'GET',
            url: 'cruds/cad.php',
            data: dados,
        })

        .done(function(msg)
        {
            if(msg == "y"){
                location.href = 'cruds/verifica.php';
            }
            else{
                $('#result').html("Esse apelido já existe, por favor insira outro");
            }
        })
        return false;
    })
});
