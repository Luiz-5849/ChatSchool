<?php

include 'conexao.php';

$cod_perfil = $_SESSION['cod_perfil'];


//Comando para puxar os códigos dos perfis a quem o usuário segue
$comando = $con->prepare("SELECT postagens.cod_post, perfil.cod_imagem, perfil.apelido from perfil inner join postagens on postagens.cod_perfil = perfil.cod_perfil where postagens.cod_perfil in (select seguidores.cod_doSeguido from seguidores where seguidores.cod_perfil = ?) order by postagens.data_post desc");
$comando->bindParam(1, $cod_perfil);
$comando->execute();

//O if abaixo verificará se o usuário já segue alguém, se ele não seguir ninguém, não aparecerá nenhuma postagem
if ($comando->rowCount() > 0) {

    while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
        $cod_post = $linha->cod_post;
        $cod_img_seguido = $linha->cod_imagem;
        $apelido = $linha->apelido;

        //INÍCIO - Comando para puxar foto de perfil da pessoa que o usuário segue
        $comandoII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
        $comandoII->bindParam(1, $cod_img_seguido);
        $comandoII->execute();

        if($comandoII->rowCount() > 0){
            
        $linhaII = $comandoII->fetch(PDO::FETCH_OBJ);
        $nome_imagem = $linhaII->nome_imagem;}
        else{
            $nome_imagem = "blank-profile-picture-973460__480.png";
        }
        //FIM

        //O comandoII abaixo vai puxar as imagens de cada post
        $comandoIII = $con->prepare("select descricao_post, cod_imagem from postagens where cod_post = ?");
        $comandoIII->bindParam(1, $cod_post);
        $comandoIII->execute();
        $linhaIII = $comandoIII->fetch(PDO::FETCH_OBJ);

        $descricao = $linhaIII->descricao_post;
        $cod_imagem = $linhaIII->cod_imagem;

        $comandoIV = $con->prepare("SELECT nome_imagem from imagens where cod_imagem = ?");
        $comandoIV->bindParam(1, $cod_imagem);
        $comandoIV->execute();

        $linhaIV = $comandoIV->fetch(PDO::FETCH_OBJ);


        //Comando para, se houver apenas uma imagem no post
        echo '<div class="postagens" id="postFeed">
        <div class="post">
            <div class="infoPost">
                <div class="imgPost">
                    <img src="../imagens/' . $nome_imagem . '" alt="">
                    <hr>
                </div>
                <h1>'.$apelido.'</h1>
        </div>
        
        <div class="desc">
            <p>' . $descricao . '</p>
        </div>

        <div class="image">        
        <img src="../imagens/' . $linhaIV->nome_imagem . '">
        </div>

          
        <div class="actionButton">
            <button type="button" class="filePostheart"><img src="../icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
            <button type="button" class="filePost"><img src="../icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
        </div>

    
    </div>
</div> ';
    
        
    }
}