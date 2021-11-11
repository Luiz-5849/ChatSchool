$(document).ready(function(){

    $('#lupa').click(function(){
        var dados = document.getElementById('.form-nav');

        $.ajax({
            method: 'POST',
            url: '../cruds/pesquisar_perfil.php',
            data: dados,
        })

        .done(function(msg)
        {
                        
        })

       
    })
});
