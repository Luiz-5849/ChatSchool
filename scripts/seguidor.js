$(document).ready(function(){

    $('#enviar').click(function(){
        var dados = $('#pesquisa').serialize();
        
        $.ajax ({
            method: 'GET',
            url: '../cruds/pesquisar_perfil.php',
            data: dados,
        })

        .done(function(msg)
        {
             var resultados = JSON.parse(msg);
             var cont = 3;
             var tabela = '';

            for(i=0; i < cont; i++){
                tabela += '<a id="">';
                tabela += '<form method="post" action="">';
                //tabela += '<div class="centroul">';
                //tabela += '<div class="containerChat">';
                tabela +=    '<img src="../assets/blank-profile-picture-973460__480.png" alt="">';
                tabela +=    '<div class="container" id="barra">';
                tabela +=        '<div class="row">';
                tabela +=            '<p class="name_apelido">'
                tabela += resultados[i].apelido;
                tabela += '</p>';
                tabela +=        '</div>';
                tabela +=        '<div class="row">';
                tabela +=            '<p class="name_apelido">'
                tabela += resultados[i].nome;
                tabela += '</p>';
                tabela +=        '</div>';
                tabela +=    '</div>';
                //tabela += '</div>';
                //tabela += '</div>';
                tabela += '</form>';
                tabela += '</a>';
            }
            
            $('#resultados').html(tabela);

            //document.getElementById("resultados").innerHTML = tabela.nome[0];
        })
        return false;
    })
});
