$(document).ready(function(){
    $('.btn').click(function(){

    var dados = $('#publiPost').serialize();

        $.ajax({
            method: 'GET',
            url: 'cruds/toPost.php',
            data: dados,
        })

        .done(function(){
            
        })

        return false;
    })
})