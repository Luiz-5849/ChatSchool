<?php

include 'conexao.php';

$pesquisado = "%".$_POST['pesquisar']."%";

$comando=$con->prepare("SELECT perfil.apelido, perfil.nome, perfil.cod_perfil, imagens.nome_imagem FROM perfil inner join imagens on perfil.cod_imagem = imagens.cod_imagem where nome like ? or email like ? or apelido like ?");
$comando->bindParam(1,$pesquisado);
$comando->bindParam(2,$pesquisado);
$comando->bindParam(3,$pesquisado);

$comando->execute();
$linha=$comando->fetch(PDO::FETCH_OBJ)
$saida = json_encode($linha);
echo $saida;


/*while($linha=$comando->fetch(PDO::FETCH_OBJ)){
    $comandoII=$con->prepare("SELECT nome_imagem from imagens where cod_imagem=?");
    $comandoII->bindParam(1,$linha->cod_imagem);
    $comandoII->execute();

    $linhaII=$comandoII->fetch(PDO::FETCH_OBJ);
    echo '
    <form method="post" id="form" action="">
    <a id="teste">
    <div><img src="'.$linhaII->nome_imagem.'"></div>
    <div><p>'.$linha->apelido.'</p></div>
    <div><p>'.$linha->nome.'</p></div>
    <input type="hidden" value="'.$linha->cod_perfil.'">
    </a>
    </form>
    ';
//}

//<form method="post" action="../cruds/seguir.php"><input type="submit" value="seguir"><input type="hidden" value="'.$linha->cod_perfil.'" name="cod_seguido"></form>