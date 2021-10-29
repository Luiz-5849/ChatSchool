<?php

include 'conexao.php';
include '../cruds/con_expirou.php';

$cod = $_SESSION['cod_perfil'];

$comando = $con->prepare("select apelido, cod_imagem from perfil where cod_perfil = ?");
$comando->bindParam(1, $cod);
$comando->execute();
$select = $comando->fetch(PDO::FETCH_OBJ);
$apelido_user = $select->apelido;

if($select->cod_imagem == null){
    $nome_img_user = "blank-profile-picture-973460__480.png";
}else{
    $cod_img = $select->cod_imagem;
    $comandoII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
    $comandoII->bindParam(1, $cod_img);
    $comandoII->execute();
    $selectII = $comandoII->fetch(PDO::FETCH_OBJ);
    $nome_img_user = $selectII->nome_imagem;
}


