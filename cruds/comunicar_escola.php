<?php

include 'conexao.php';
session_start();

$escola = $_SESSION['cod_escola'];
$comunicado = $_GET['comunicado'];

$comando = $con->prepare("INSERT into comunicado (comunicado, cod_escola, data_comunicado) values (?, ?, curdate())");
$comando->bindParam(1, $comunicado);
$comando->bindParam(2, $escola);
$comando->execute();

header("location:../coordenador/adm_co.html");
