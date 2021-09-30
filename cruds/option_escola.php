<?php
include 'conexao.php';

$comando=$con->prepare("select nome_escola from escolas");
$comando->execute();
while($linha = $comando->fetch(PDO::FETCH_OBJ)){
    echo '<option value="'. $linha->nome_escola .'">'. $linha->nome_escola .'</option>';
}