<?php

include 'conexao.php';
session_start();

$escola = $_SESSION['cod_escola'];
$comunicado = $_POST['comunicado'];

$comando = $con->prepare("INSERT into comunicados (comunicado, cod_escola, data_comunicado) values (?, ?, now())");
$comando->bindParam(1, $comunicado);
$comando->bindParam(2, $escola);
$comando->execute();

header("location:../coordenador/adm_co.html");
