<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$cod_login = $_SESSION['cod_login'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];
$apelido = $_GET['apelido'];

$comando = $con->prepare("select * from perfil where apelido = ?");
$comando->bindParam(1, $apelido);
$comando->execute();

if ($comando->rowCount() > 0) {
    $result = "n";
    echo $result;
}
else
{
    $comandoI = $con->prepare("update login set login = ?, senha = ? where cod_login = ?");
    $comandoI->bindParam(1, $email);
    $comandoI->bindParam(2, $senha);
    $comandoI->bindParam(3, $cod_login);
    $comandoI->execute();

    $comandoII = $con->prepare("update perfil set nome = ?, apelido = ? where cod_perfil = ?");
    $comandoII->bindParam(1, $nome);
    $comandoII->bindParam(2, $apelido);
    $comandoII->bindParam(3, $cod_perfil);
    $comandoII->execute();

    $result = "y";
    echo $result;
}

?>