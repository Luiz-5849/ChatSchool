<?php

include "conexao.php";
session_start();

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];
    $acesso_user = $_SESSION['acesso'];
    if ($acesso_user == 4){
        $escola = $_POST['escola'];
    }else{
        $escola = $_SESSION['cod_escola'];
    }
    
    $comando=$con->prepare("insert into perfil (login, senha, acesso, cod_escola) values (?, ?, ?, ?)");
    $comando->bindParam(1,$email);
    $comando->bindParam(2,$senha);
    $comando->bindParam(3,$acesso);
    $comando->bindParam(4, $escola);
    $comando->execute();

    if ($acesso_user == 3) {
        $cod_turma = $_POST['turma'];

        $comandoII = $con->prepare("select cod_perfil from perfil where login = ? and senha = ?");
        $comandoII->bindParam(1, $email);
        $comandoII->bindParam(2, $senha);
        $comandoII->execute();
        $cod_perfil = $comandoII->fetch(PDO::FETCH_OBJ);

        $comandoIII = $con->prepare("insert into enturmando (cod_perfil, cod_turma) values (?, ?)");
        $comandoIII->bindParam(1, $cod_perfil->cod_perfil);
        $comandoIII->bindParam(2, $cod_turma);
        $comandoIII->execute();
    }

    if($acesso_user == 3){
    header("location:../coordenador/adm_co.html");
    }elseif($acesso_user == 4){
    header("location:../programador/administrativa.html");
    }
?>