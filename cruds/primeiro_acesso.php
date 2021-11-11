<?php

include 'conexao.php';
session_start();

$cod_perfil = $_SESSION['cod_perfil'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];

$comandoI = $con->prepare("select * from perfil where apelido = ?");
$comandoI->bindParam(1, $apelido);
$comandoI->execute();

$comandoII = $con->prepare("select * from perfil where login = ?");
$comandoII->bindParam(1, $email);
$comandoII->execute();

if ($comandoI->rowCount() > 0) {
    $result = "n";
    echo $result;
}
elseif($comandoII->rowCount() > 0){
    $result = "e";
    echo $result;
} 
else{
    $comandoIII = $con->prepare("update perfil set login = ?, senha = ?, nome = ?, apelido = ? where cod_perfil = ?");
    $comandoIII->bindParam(1, $email);
    $comandoIII->bindParam(2, $senha);
    $comandoIII->bindParam(3, $nome);
    $comandoIII->bindParam(4, $apelido);
    $comandoIII->bindParam(5, $cod_perfil);
    $comandoIII->execute();

    $result = "y";
    echo $result;
}

?>