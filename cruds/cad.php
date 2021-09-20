<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$cod_login = $_SESSION['cod_login'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];
$apelido = $_GET['apelido'];

$comando = $con->prepare("update login set login = ?, senha = ? where cod_login = ?");
$comando->bindParam(1, $email);
$comando->bindParam(2, $senha);
$comando->bindParam(3, $cod_login);
$comando->execute();

$comandoII = $con->prepare("update perfil set nome = ?, apelido = ? where cod_perfil = ?");
$comandoII->bindParam(1, $nome);
$comandoII->bindParam(2, $apelido);
$comandoII->bindParam(3, $cod_perfil);
$comandoII->execute();

header('location:verifica.php');

?>