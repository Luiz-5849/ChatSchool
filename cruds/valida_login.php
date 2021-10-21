<?php

include 'conexao.php';
session_start();

if (isset($_GET['acesso'])) {
	$acesso = addslashes($_GET['acesso']);
}

if (isset($_GET['email'])) {
	$login = addslashes($_GET['email']);
}

if (isset($_GET['senha'])) {
	$senha = addslashes($_GET['senha']);
}

$comando = $con->prepare("select cod_login, acesso from login where login = ? and senha = ? and acesso = ?");
$comando->bindParam(1, $login);
$comando->bindParam(2, $senha);
$comando->bindParam(3, $acesso);

$comando->execute();
$cod = $comando->fetch(PDO::FETCH_OBJ);

if ($comando->rowcount() == 1) 
{
	$_SESSION['cod_login'] = $cod->cod_login;
	$_SESSION['acesso'] = $cod->acesso;
	$result = "y";
	echo $result;
}
else
{	
	$result = "n";
	echo $result;
}

?>