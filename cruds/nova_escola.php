<?php

include 'conexao.php';
$escola = $_GET['nome_escola'];

$comando = $con->prepare("insert into escolas (nome_escola) value (?)");
$comando->bindParam(1, $escola);
$comando->execute();

header("location:../programador/administrativa.html");