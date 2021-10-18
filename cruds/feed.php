<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];

//Comando para puxar os códigos dos perfis a quem o usuário segue
$comando = $con->prepare("select cod_doSeguido from seguidores where cod_perfil = ?");
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
        $cod_doSeguido = $linha->cod_doSeguido;
        $comandoII = $con->prepare("select cod_post, descricao_post from postagens order by data_post desc where cod_perfil = (select cod_doSeguido from seguidores where cod_perfil = ?)");
        $comandoII->bindParam(1, $cod_doSeguido);
        $comandoII->execute();

        //O if abaixo verificará se os perfis a quem o usuário segue já realizaram alguma postagem, porque se não, não aparecerá nenhuma postagem
        if ($comandoII->rowCount() > 0) {

            //O while abaixo puxará um por um, o codigo e a descrição de cada post de perfil por perfil que o usuário segue
            while ($linhaII = $comando->fetch(PDO::FETCH_OBJ)) {
                $cod_post = $linhaII->cod_post;
                $descricao = $linhaII->descricao;
                
                //O comandoIII abaixo vai puxar as imagens de cada post
                $comandoIII = $con->prepare("select imagem from imagens where cod_post = ?");
                $comandoIII->bindParam(1, $cod_post);
                $comandoIII->execute();

                if ($comandoIII->rowCount() > 1) {
                    //Comando para, se houver mais de uma imagem, fazer o carrossel de imagens
                }
                else
                {
                    //Comando para, se houver apenas uma imagem no post
                    $img = $comandoIII->fetch(PDO::FETCH_OBJ);
                    echo '<div class="col-3">
                                <img class="card-img-top" src="data:image/jpg;base64,' . base64_encode($img->imagem) . '">
                            </div>';
                }
            }
        }
    }
}