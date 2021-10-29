<?php

include "conexao.php";
session_start();

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];
    $acesso_user = $_SESSION['acesso'];

    $comando=$con->prepare("insert into login (login,senha,acesso,primeiro_acesso) values (?,?,?,0)");
    $comando->bindParam(1,$email);
    $comando->bindParam(2,$senha);
    $comando->bindParam(3,$acesso);

    $comando->execute();

    if($acesso_user == 3){
    header("location:../coordenador/adm_co.html");
    }elseif($acesso_user == 4){
    header("location:../programador/administrativa.html");
    }
?>