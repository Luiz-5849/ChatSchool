<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];

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