<?php

$bco = 'bancotcc';
$user = 'root';
$senha = 'vertrigo';
//Apagar em casa só a senha e a porta
try{
	$con = new PDO("mysql:host=localhost:3307; dbname=$bco", "$user", "$senha");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$con->exec("set names utf8");
}
catch (PDOException $erro){
	echo "Erro na conexão:" . $erro->getMessage();
}

?>