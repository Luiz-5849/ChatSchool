<?php

include "conexao.php";
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];

    $comando=$con->prepare("insert into login (login,senha,acesso,primeiro_acesso) values (?,?,?,0)");
    $comando->bindParam(1,$email);
    $comando->bindParam(2,$senha);
    $comando->bindParam(3,$acesso);

    $comando->execute();

    header("location:../administrativa.html");
?>