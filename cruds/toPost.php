<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];
$descricao = $_POST['textarea'];

$arquivo_atual = $_FILES['arquivo']['name'];
$tipo_arquivo = $_FILES['arquivo']['type'];
$extensão_arquivo = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];


$comando = $con->prepare("insert into postagens (cod_perfil, descricao_post, hora_post, data_post) values (?, ?, curtime(), curdate())");
$comando->bindParam(1, $cod);
$comando->bindParam(2, $descricao);
$comando->execute();

if (isset($_FILES['arquivo']['name'])) {
    $destino = "../imagens/" . $arquivo_atual;
    move_uploaded_file($arquivo_tmp, $destino);

    $comandoII = $con->prepare("select cod_post from postagens where cod_perfil = ? order by cod_post desc limit 1");
    $comandoII->bindParam(1, $cod);
    $comandoII->execute();
    $saida = $comandoII->fetch(PDO::FETCH_OBJ);
    $cod_post = $saida->cod_post;

    $imagem = file_get_contents("https://localhost/ChatSchool/imagens/" . $arquivo_atual);
    $comandoIII = $con->prepare("insert into imagens (imagem, nome_imagem, cod_post) values (?, ?, ?)");
    $comandoIII->bindParam(1, $imagem);
    $comandoIII->bindParam(2, $arquivo_atual);
    $comandoIII->bindParam(3, $cod_post);
    $comandoIII->execute();
}