<?php
include 'conexao.php';

$comando=$con->prepare("select cod_escola, nome_escola from escolas");
$comando->execute();
while($linha = $comando->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'. $linha->cod_escola .'">'. $linha->nome_escola .'</option>';
}