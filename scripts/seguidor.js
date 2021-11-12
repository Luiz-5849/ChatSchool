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
        //     var resultados;
              resultados = JSON.parse(msg);

        //     $('#resultados').html(msg);
        //     var Tabela = '';
        //     for(i = 0; i < resultados.length; i++){
        //         Tabela += '<form method="post" id="" action="">';
        //         Tabela += '<a id="">';
        //         Tabela += '<div><img src="' + Tabela[i].nome_imagem + '"></div>';
        //         Tabela += '<div><p>' + resultados[0].apelido + '</p></div>';
        //         Tabela += '<div><p>' + resultados[0].nome + '</p></div>';
        //         Tabela += '<input type="hidden" value="' + resultados[0].cod_perfil + '">';
        //         Tabela += '</a>';
        //         Tabela += '</form>';
        //    }
        var Tabela;
        Tabela = resultados[0].apelido;
            $("#resultados").html(Tabela);
        })
        return false;
    })
});
