<?php
include 'conexao.php';

$comando=$con->prepare("select cod_curso, nome_curso from cursos");
$comando->execute();
while($linha = $comando->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'. $linha->cod_curso .'">'. $linha->nome_curso .'</option>';
}