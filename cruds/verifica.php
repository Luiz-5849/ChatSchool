<?php

include 'conexao.php';
session_start();

$acesso = $_SESSION['acesso'];
$cod_perfil = $_SESSION['cod_perfil'];


$comando = $con->prepare("select apelido from perfil where cod_perfil = ?");
$comando->bindParam(1, $cod_perfil);

$comando->execute();
$saida = $comando->fetch(PDO::FETCH_OBJ);

if($saida->apelido == null || $saida->apelido = "") {
	header('location:../primeiro_acesso.html');
} 
else
{
	switch($acesso)
       	{
	        case 1:
	        header('location:../aluno_professor/feed.php');
	            break;

	        case 2:
	        header('location:../aluno_professor/feed.php');
	            break;

	        case 3:
	        header('location:../coordenador/adm_co.html');
	            break;

	        case 4:
	        header('location:../programador/administrativa.html');
	        break;
        }
}

?>

