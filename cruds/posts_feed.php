<?php

include 'conexao.php';

$cod_perfil = $_SESSION['cod_perfil'];

include '../cruds/con_expirou.php';

//Comando para puxar os códigos dos perfis a quem o usuário segue
$comando = $con->prepare("select postagens.cod_post, postagens.descricao_post, perfil.apelido, perfil.cod_imagem from postagens inner join perfil on postagens.cod_perfil = perfil.cod_perfil 
where postagens.cod_perfil = (select seguidores.cod_doSeguido from seguidores where seguidores.cod_perfil = ?) order by postagens.data_post desc");
$comando->bindParam(1, $cod_perfil);
$comando->execute();

/* select postagens.cod_post, postagens.descricao_post, perfil.apelido, perfil.cod_imagem from postagens inner join perfil on postagens.cod_perfil = perfil.cod_perfil 
where postagens.cod_perfil = (select seguidores.cod_doSeguido from seguidores where seguidores.cod_perfil = ?) order by postagens.data_post desc
*/

//O if abaixo verificará se o usuário já segue alguém, se ele não seguir ninguém, não aparecerá nenhuma postagem
if ($comando->rowCount() > 0) {

    while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
        $cod_post = $linha->cod_post;
        $descricao = $linha->descricao_post;
        $apelido = $linha->apelido;
        $cod_img = $linha->cod_imagem;

        $comandoIII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
        $comandoIII->bindParam(1, $cod_img);
        $comandoIII->execute();
        if($comandoIII->rowCount() > 0){
        $imagem = $comandoIII->fetch(PDO::FETCH_OBJ);
        $nome_imagem = $imagem->nome_imagem;}
        else{
            $nome_imagem = "blank-profile-picture-973460__480.png";
        }

        //O comandoII abaixo vai puxar as imagens de cada post
        $comandoII = $con->prepare("select nome_imagem from imagens where cod_post = ?");
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
            echo '<div class="postagens" id="postFeed">
            <div class="post">
                <div class="infoPost">
                    <div class="imgPost">
                        <img src="../imagens/' . $nome_imagem . '" alt="">
                    </div>
                
                    <h1>'.$apelido.'</h1>
                    
            <img src="../imagens/' . $img->nome_imagem . '">
            </div>
            <p>
              <?php echo $descricao; ?>
            </p>
            <div class="actionButton">
                <button type="button" class="filePostheart"><img src="../icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
                <button type="button" class="filePost"><img src="../icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
            </div>
        </div>
    </div> ';
        }
        
    }
}