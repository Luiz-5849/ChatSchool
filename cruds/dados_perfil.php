<?php

include 'conexao.php';
session_start();

include 'cruds/con_expirou.php';

$cod = $_SESSION['cod_perfil'];

//Comando para puxar o nome e a bio
$comandoI = $con->prepare("select nome, bio from perfil where cod_perfil = ?");
$comandoI->bindParam(1, $cod);
$comandoI->execute();
$dadosI = $comandoI->fetch(PDO::FETCH_OBJ);
$nome = $dadosI->nome;
$bio = $dadosI->bio;

/*
//comando para puxar a quantidade de publicações
$comandoII = $con->prepare("select * from postagens where cod_perfil = ?");
$comandoII->bindParam(1, $cod);
$comandoII->execute();
$publicacoes = $comandoII->rowCount();

//Comando para puxar o numero de pessoas que o usuário está seguindo
$comandoIII = $con->prepare("select * from seguidores where cod_perfil = ?");
$comandoIII->bindParam(1, $cod);
$comandoIII->execute();
$seguindo = $comandoIII->rowCount();

//Comando para puxar o numero de seguidores
$comandoIV = $con->prepare("select * from seguidores where cod_doSeguido = ?");
$comandoIV->bindParam(1, $cod);
$comandoIV->execute();
$seguidores = $comandoIV->rowCount();

//Comando para puxar a foto do perfil
$comandoV = $con->prepare("select imagens.imagem from imagens inner join perfil on perfil.cod_imagem = imagens.cod_imagem where perfil.cod_perfil = ?");
$comandoV->bindParam(1, $cod);
$comandoV->execute();
$dados = $comandoV->fetch(PDO::FETCH_OBJ);
$imagem = $dados->imagem;*/

?>