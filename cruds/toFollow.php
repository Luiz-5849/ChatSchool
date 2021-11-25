<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$cod_doSeguido = $_POST['seguir'];

$comando = $con->prepare("insert into seguidores (cod_perfil, cod_doSeguido) values (?, ?)");
$comando->bindParam(1, $cod_perfil);
$comando->bindParam(2, $cod_doSeguido);
$comando->execute();

?>