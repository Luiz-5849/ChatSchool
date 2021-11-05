<?php

include 'conexao.php';
session_start();

$cod_escola = $_SESSION['cod_escola'];

$comando = $con->prepare("select turma.cod_turma, turma.modulo_ano, turma.nome_turma, cursos.nome_curso, turma.periodo from turma inner join cursos on turma.cod_curso = cursos.cod_curso where turma.cod_escola = ?");
$comando->bindParam(1, $cod_escola);
$comando->execute();
while ($linha = $comando->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'. $linha->cod_turma .'">'. $linha->modulo_ano .'º'. $linha->nome_turma .' - '. $linha->nome_curso .' - '. $linha->periodo .'</option>'
}
