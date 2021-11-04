<?php

include "conexao.php";
session_start();

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];
    $acesso_user = $_SESSION['acesso'];
    $escola = $_SESSION['cod_escola'];
    
    $comando=$con->prepare("insert into perfil (login, senha, acesso, cod_escola) values (?, ?, ?, ?)");
    $comando->bindParam(1,$email);
    $comando->bindParam(2,$senha);
    $comando->bindParam(3,$acesso);
    $comando->bindParam(4, $escola);

    $comando->execute();

    if($acesso_user == 3){
    header("location:../coordenador/adm_co.html");
    }elseif($acesso_user == 4){
    header("location:../programador/administrativa.html");
    }
?>