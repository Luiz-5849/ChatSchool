<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];

$arquivo_atual = $_FILES['flImage']['name'];
$arquivo_tmp = $_FILES['flImage']['tmp_name'];

if($arquivo_atual != null || $arquivo_atual != ""){
    
    $destino = "../imagens/" . $arquivo_atual;
    move_uploaded_file($arquivo_tmp, $destino);
    
    $comando = $con->prepare("insert into imagens (nome_imagem) values (?)");
    $comando->bindParam(1, $arquivo_atual);
    $comando->execute();
    
    $comandoII = $con->prepare("select cod_imagem from imagens where nome_imagem = ? order by cod_imagem desc limit 1");
    $comandoII->bindParam(1, $arquivo_atual);
    $comandoII->execute();
    $linha = $comandoII->fetch(PDO::FETCH_OBJ);
    $cod_img = $linha->cod_imagem;
    
    $comandoIII = $con->prepare("update perfil set cod_imagem = ? where cod_perfil = ?");
    $comandoIII->bindParam(1, $cod_img);
    $comandoIII->bindParam(2, $cod);
    $comandoIII->execute();
    
    header("location:../aluno_professor/perfil.php");
}
header("location:../aluno_professor/perfil.php");
