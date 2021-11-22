<?php

include 'conexao.php';
$cod_perfil = $_SESSION['cod_perfil'];

$comando = $con->prepare("SELECT cod_turma from enturmando where cod_perfil = ?");
$comando->bindParam(1, $cod_perfil);
$comando->execute();
while ($linha = $comando->fetch(PDO::FETCH_OBJ)){
    $cod_turma = $linha->cod_turma;

    $comandoII = $con->prepare("SELECT comunicado from comunicados where cod_turma = ? order by data_comunicado desc");
    $comandoII->bindParam(1, $cod_turma);
    $comandoII->execute();
    
    while($linhaII = $comandoII->fetch(PDO::FETCH_OBJ)){
        echo '<div class="accordion-body">'. $linhaII->comunicado .'</div>';
    }
}