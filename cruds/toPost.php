<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];
$descricao = $_POST['textarea'];

$arquivo_atual = $_FILES['arquivo']['name'];
$tipo_arquivo = $_FILES['arquivo']['type'];
$extensão_arquivo = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];


if (isset($_FILES['arquivo']['name'])) {
    $destino = "../imagens/" . $arquivo_atual;
    move_uploaded_file($arquivo_tmp, $destino);

    //$imagem = file_get_contents("https://localhost/ChatSchool/imagens/" . $arquivo_atual);
    $comando = $con->prepare("insert into imagens (nome_imagem) values (?)");
    //$comandoIII->bindParam(1, $imagem);
    $comando->bindParam(1, $arquivo_atual);
    $comando->execute();

    $comandoII = $con->prepare("select cod_imagem from imagens where nome_imagem = ? order by cod_imagem desc limit 1");
    $comandoII->bindParam(1, $arquivo_atual);
    $comandoII->execute();
    $linha = $comandoII->fetch(PDO::FETCH_OBJ);
    $cod_img = $linha->cod_imagem;

    $comandoIII = $con->prepare("insert into postagens (cod_perfil, descricao_post, hora_post, data_post, cod_imagem) values (?, ?, curtime(), curdate(), ?)");
    $comandoIII->bindParam(1, $cod);
    $comandoIII->bindParam(2, $descricao);
    $comandoIII->bindParam(3, $cod_img);
    $comandoIII->execute();
}else{
    $comandoIV = $con->prepare("insert into postagens (cod_perfil, descricao_post, hora_post, data_post) values (?, ?, curtime(), curdate())");
    $comandoIV->bindParam(1, $cod);
    $comandoIV->bindParam(2, $descricao);
    $comandoIV->execute();
}
header('location:../aluno_professor/feed.php');