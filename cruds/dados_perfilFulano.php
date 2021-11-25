<?php

include 'conexao.php';
session_start();
$cod_user = $_SESSION['cod_perfil'];

//comando para puxar img do usuário p/ exibí-la na nav bar
$comando = $con->prepare("select imagens.nome_imagem from imagens inner join perfil on perfil.cod_imagem = imagens.cod_imagem where perfil.cod_perfil = ?");
$comando->bindParam(1, $cod_user);
$comando->execute();
if($comando->rowCount()>0){
    $dadosII = $comando->fetch(PDO::FETCH_OBJ);
    if($dadosII->nome_imagem == null || $dadosII->nome_imagem == ""){
        $imagem_user = "blank-profile-picture-973460__480.png";
    }
    $imagem_user = $dadosII->nome_imagem;
}else{
    $imagem_user = "blank-profile-picture-973460__480.png";
}

//Comando para puxar o nome e a bio
$comandoI = $con->prepare("select apelido, bio from perfil where cod_perfil = ?");
$comandoI->bindParam(1, $cod);
$comandoI->execute();
$dadosI = $comandoI->fetch(PDO::FETCH_OBJ);
$nome = $dadosI->apelido;
if ($dadosI->bio == null || $dadosI->bio == "") {
    $bio = '<span class="">Sem mensagem de perfil</span>';
}else{
    $bio = $dadosI->bio;
}

//comando para puxar a quantidade de publicações
$comandoII = $con->prepare("select cod_post from postagens where cod_perfil = ?");
$comandoII->bindParam(1, $cod);
$comandoII->execute();
if ($comandoII->rowCount() > 0) {
    $publicacoes = $comandoII->rowCount();
}else{
    $publicacoes = 0;
}

//Comando para puxar o numero de pessoas que o usuário está seguindo
$comandoIII = $con->prepare("select * from seguidores where cod_perfil = ?");
$comandoIII->bindParam(1, $cod);
$comandoIII->execute();
if ($comandoIII->rowCount() > 0) {
    $seguindo = $comandoIII->rowCount();
}else{
    $seguindo = 0;
}



//Comando para puxar o numero de seguidores
$comandoIV = $con->prepare("select * from seguidores where cod_doSeguido = ?");
$comandoIV->bindParam(1, $cod);
$comandoIV->execute(); 
if ($comandoIV->rowCount() > 0) {
    $seguidores = $comandoIV->rowCount();
}else{
    $seguidores = 0;
}



//Comando para puxar a foto do perfil
$comandoV = $con->prepare("select imagens.nome_imagem from imagens inner join perfil on perfil.cod_imagem = imagens.cod_imagem where perfil.cod_perfil = ?");
$comandoV->bindParam(1, $cod);
$comandoV->execute();
if($comandoV->rowCount()>0){
    $dados = $comandoV->fetch(PDO::FETCH_OBJ);
    if($dados->nome_imagem == null || $dados->nome_imagem == ""){
        $imagem = "blank-profile-picture-973460__480.png";
    }
    $imagem = $dados->nome_imagem;
}else{
    $imagem = "blank-profile-picture-973460__480.png";
}

?>