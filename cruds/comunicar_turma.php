<?php

include 'conexao.php';

$comunicado = $_POST['comunicado'];
$cod_turma = $_POST['turma'];

$comando = $con->prepare("INSERT into comunicados (cod_turma, comunicado, data_comunicado) values (?, ?, curdate())");
$comando->bindParam(1, $cod_turma);
$comando->bindParam(2, $comunicado);
$comando->execute();

header ("location:../coordenador/adm_co.html");
