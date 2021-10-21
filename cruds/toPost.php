<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];
$descricao = $_GET['textarea'];

if (!(isset($_FILES['arquivo']['name']))) {
    $arquivo_atual = $_FILES['arquivo']['name'];
}

$comando = $con->prepare("insert into postagens (cod_perfil, descricao, hora_post, data_post) values (?, ?, curtime(), curdate())");
$comando->bindParam(1, $cod);
$comando->bindParam(2, $descricao);
$comando->execute();

if (!(isset($_FILES['arquivo']['name']))) {
    $comandoII = $con->prepare("select max(cod_post) from postagens where cod_perfil = ?");
    $comandoII->bindParam(1, $cod);
    $comandoII->execute();
    $saida = $comandoII->fetch(PDO::FETCH_OBJ);
    $cod_post = $saida->cod_post;

    $imagem = file_get_contents("https://localhost/imagens/" . $arquivo_atual);
    $comandoIII = $con->prepare("insert into imagens (imagem, nome_imagem) values (?, ?)");
    $comandoIII->bindParam(1, $imagem);
    $comandoIII->bindParam(2, $arquivo_atual);
    $comandoIII->execute();
}