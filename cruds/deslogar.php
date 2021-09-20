<?php

session_start();

unset($_SESSION['cod_perfil']);
unset($_SESSION['acesso']);
unset($_SESSION['cod_login']);
header('location:../login.html');

?>