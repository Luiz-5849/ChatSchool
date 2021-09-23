<?php

include "conexao.php"

if(isset($_GET["Email"])){$Email=$_GET["Email"];}
if(isset($_GET["Senha"])){$Senha=$_GET["Senha"];}


try{
    $comando = $con->prepare("delete from Login where Nome = ?");
    $comando->bindParam(1, $Nome);

    $comando->execute();

    if ($comando->rowCount() > 0)
    {
        $RetornaJSON = "Exclusão feita com sucesso!"
    }else{
        $RetornaJSON = "Não foi possível executar o comando!"
    }
}
catch (PDOException $erro){
    $RetornaJSON = "Erro: ".$erro->getMessage();
}

echo '$RetornoJSON';


?>