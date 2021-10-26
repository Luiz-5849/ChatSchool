<?php

include 'conexao.php';
session_start();

$acesso = $_SESSION['acesso'];
$cod_login = $_SESSION['cod_login'];

$comando = $con->prepare("select primeiro_acesso from login where cod_login = ?");
$comando->bindParam(1, $cod_login);

$comando->execute();

$saida = $comando->fetch(PDO::FETCH_OBJ);

if($saida->primeiro_acesso == 0) {
	header('location:../primeiro_acesso.html');
} 
else
{
	$comandoII = $con->prepare("select perfil.cod_perfil from perfil inner join login on perfil.cod_login = login.cod_login where login.cod_login = ?");
	$comandoII->bindParam(1, $cod_login);
	$comandoII->execute();
	$saidaII = $comandoII->fetch(PDO::FETCH_OBJ);
	$_SESSION['cod_perfil'] = $saidaII->cod_perfil;
	switch($acesso)
       	{
	        case 1:
	        header('location:../perfil.php');
	            break;

	        case 2:
	        header('location:../perfil.php');
	            break;

	        case 3:
	        header('location:../adm_co.php');
	            break;

	        case 4:
	        header('location:../administrativa.html');
	        break;
        }
}

?>

