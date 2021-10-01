<?php

include 'conexao.php';
session_start();

$cod = $_SESSION['cod_perfil'];
$img = $_GET[''];
$descricao = $_GET[''];

$comando = $con->prepare("insert into postagens (cod_perfil, descricao, hora_post, data_post) values (?, ?, curtime(), curdate())");
$comando->bindParam(1, $cod);
$comando->bindParam(2, $descricao);
$comando->execute();