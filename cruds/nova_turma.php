<?php

include 'conexao.php';
session_start();

$cod_escola = $_SESSION['cod_escola'];
$cod_curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$modulo_ano = $_POST['modulo_ano'];
$nome_turma = $_POST['nome_turma'];

$comando = $con->prepare("insert into turma (cod_curso, periodo, cod_escola, modulo_ano, nome_turma) values (?, ?, ?, ?, ?)");
$comando->bindParam(1, $cod_curso);
$comando->bindParam(2, $periodo);
$comando->bindParam(3, $cod_escola);
$comando->bindParam(4, $modulo_ano);
$comando->bindParam(5, $nome_turma);
$comando->execute();

header("location:../coordenador/adm_co.html");