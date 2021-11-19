function myFunction(){

    let imagem = document.getElementById('image');
    let pesquisa = document.getElementById('imgInput');
    imagem.addEventListener('click', () => {
    pesquisa.click();
    });
    
    /*var formData = new FormData(document.getElementById("imagem_perfil"));

    $.ajax({
        type: 'POST',
        url: '../cruds/cad_img.php',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
       

        /*beforeSend: function(){
            alert('Erro envio');
        },*/
}

/*$(document).ready(function(){

    $('#alt_img').click(function(){
        var formData = new FormData(document.getElementById("imagem_perfil"));

        $.ajax ({
            method: 'POST',
            url: '../cruds/cad_img.php',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
        })

        .done(function(msg)
        {
            location.reload();
        })
        return false;
    })
});*/