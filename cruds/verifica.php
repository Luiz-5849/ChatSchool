<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];
$acesso = $_SESSION['acesso'];


$comando = $con->prepare("select nome from perfil where cod_perfil = ?");
$comando->bindParam(1, $cod);

$comando->execute();

$saida = $comando->fetch(PDO::FETCH_OBJ);

if ($saida->nome == null || $saida->nome == "") {
	header('location:../primeiro_acesso.html');
} 
else
{
	switch($acesso)
       	{
	        case 1:
	        header('location:../perfil.php');
	            break;

	        case 2:
	        header('location:../perfil.php');
	            break;

	        case 3:
	        header('location:../perfil.php');
	            break;

	        case 4:
	        header('location:../perfil.php');
	        break;
        }
}

?>

