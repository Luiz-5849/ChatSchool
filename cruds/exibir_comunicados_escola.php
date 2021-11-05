<?php

include 'conexao.php';
$escola = $_SESSION['cod_escola'];

$comando = $con->prepare("select comunicado from comunicado where cod_escola = ? order by cod_comunicado desc limit 5");
$comando->bindParam(1, $escola);
$comando->execute();
while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
    echo '<div class="accordion-body">'. $linha->comunicado .'</div> <hr>';
}

?>