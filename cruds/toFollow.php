<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$cod_doSeguido = $_POST['seguir'];


$comando = $con->prepare("select cod_seguidor from seguidores where cod_perfil = ? and cod_doSeguido = ?");
$comando->bindParam(1, $cod_perfil);
$comando->bindParam(2, $cod_doSeguido);
$comando->execute();
if ($comando->rowCount() == 1) {
    $msg = "Você já segue essa pessoa";
}else{
    $comandoI = $con->prepare("insert into seguidores (cod_perfil, cod_doSeguido) values (?, ?)");
    $comandoI->bindParam(1, $cod_perfil);
    $comandoI->bindParam(2, $cod_doSeguido);
    $comandoI->execute();

    $msg = "Agora você segue essa pessoa";
}

echo $msg;
?>