<?php

include 'conexao.php';
session_start();
$cod = $_SESSION['cod_perfil'];

$bio = $_POST['bio'];

$comando = $con->prepare("update perfil set bio = ? where cod_perfil = ?");
$comando->bindParam(1, $bio);
$comando->bindParam(2, $cod);
$comando->execute();

header('location:../aluno_professor/perfil.php');

?>