<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];

include 'cruds/con_expirou.php';

//Comando para puxar os códigos dos perfis a quem o usuário segue
$comando = $con->prepare("select cod_post, descricao_post from postagens where cod_perfil = (select cod_doSeguido from seguidores where cod_perfil = ?) order by data_post desc");
$comando->bindParam(1, $cod_perfil);
$comando->execute();

/* select imagens.imagem, postagens.descricao from postagens
inner join imagens on imagens.cod_post = postagens.cod_post 
inner join seguidores on seguidores.cod_doSeguido = postagens.cod_perfil 
where seguidores.cod_perfil = ? 
*/

//O if abaixo verificará se o usuário já segue alguém, se ele não seguir ninguém, não aparecerá nenhuma postagem
if ($comando->rowCount() > 0) {

    while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
        $cod_post = $linha->cod_post;
        $descricao = $linha->descricao;
        
        //O comandoIII abaixo vai puxar as imagens de cada post
        $comandoII = $con->prepare("select imagem from imagens where cod_post = ?");
        $comandoII->bindParam(1, $cod_post);
        $comandoII->execute();

        if ($comandoII->rowCount() > 1) {
            while ($img = $comandoII->fetch(PDO::FETCH_OBJ)) {
            //Comando para, se houver mais de uma imagem, fazer o carrossel de imagens
            }
        }
        else {
            //Comando para, se houver apenas uma imagem no post
            $img = $comandoII->fetch(PDO::FETCH_OBJ);
            echo '<div class="col-3">
                        <img class="card-img-top" src="data:image/jpg;base64,' . base64_encode($img->imagem) . '">
                    </div>';
        }
        
    }
}