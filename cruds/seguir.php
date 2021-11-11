<?php

include 'conexao.php';

session_start();

$cod_user=$_SESSION['cod_perfil'];
$cod_doSeguido=$_POST['cod_seguido'];

$comando=$con->prepare("INSERT INTO seguidores(cod_perfil,cod_doSeguido) values(?,?)");
$comando->bindParam(1,$cod_user);
$comando->bindParam(2,$cod_doSeguido);
$comando->execute();
