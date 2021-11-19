<?php

include "conexao.php";
session_start();

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];
    $acesso_user = $_SESSION['acesso'];
    
    if ($acesso_user == 4){
        $escola = $_POST['escola'];

        $comando=$con->prepare("insert into perfil (login, senha, acesso, cod_escola) values (?, ?, ?, ?)");
        $comando->bindParam(1,$email);
        $comando->bindParam(2,$senha);
        $comando->bindParam(3,$acesso);
        $comando->bindParam(4,$escola);
        $comando->execute();

        header("location:../programador/administrativa.html");

    }elseif ($acesso_user == 3){
        $escola = $_SESSION['cod_escola'];
        $cod_turma = $_POST['turma'];

        echo 'cod_turma: ' . $cod_turma;

        $comando=$con->prepare("insert into perfil (login, senha, acesso, cod_escola) values (?, ?, ?, ?)");
        $comando->bindParam(1,$email);
        $comando->bindParam(2,$senha);
        $comando->bindParam(3,$acesso);
        $comando->bindParam(4,$escola);
        $comando->execute();

        $comandoII = $con->prepare("select cod_perfil from perfil where login = ?");
        $comandoII->bindParam(1, $email);
        $comandoII->execute();
        $saida = $comandoII->fetch(PDO::FETCH_OBJ);
        $cod_perfil_pTurma = $saida->cod_perfil;

        $comandoIII = $con->prepare("insert into enturmando (cod_perfil, cod_turma) values (?, ?)");
        $comandoIII->bindParam(1, $cod_perfil_pTurma);
        $comandoIII->bindParam(2, $cod_turma);
        $comandoIII->execute();

        header("location:../coordenador/adm_co.html");
    }

?>