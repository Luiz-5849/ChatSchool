<?php

include 'conexao.php';

$curso = $_GET['curso'];

$comando = $con->prepare("insert into cursos (nome_curso) value (?)");
$comando->bindParam(1, $curso);
$comando->execute();

header("location:../coordenador/adm_co.html");