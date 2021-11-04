<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
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
    $comandoI = $con->prepare("update perfil set login = ?, senha = ?, nome = ?, apelido = ? where cod_perfil = ?");
    $comandoI->bindParam(1, $email);
    $comandoI->bindParam(2, $senha);
    $comandoI->bindParam(3, $nome);
    $comandoI->bindParam(4, $apelido);
    $comandoI->bindParam(5, $cod_perfil);
    $comandoI->execute();

    $result = "y";
    echo $result;
}

?>