<?php

include 'conexao.php';

$comando = $con->prepare("insert into login value()");
$comando->execute();
$cod = $con->lastInsertId();

echo "uuu";
?>