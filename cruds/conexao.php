<?php

$bco = 'bancotcc';
$user = 'root';
$senha = '';
try{
	$con = new PDO("mysql:host=localhost; dbname=$bco", "$user", "$senha");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$con->exec("set names utf8");
}
catch (PDOException $erro){
	echo "Erro na conexão:" . $erro->getMessage();
}

?>