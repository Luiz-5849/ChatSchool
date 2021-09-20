<?php

session_start();

unset($_SESSION['cod_perfil']);
unset($_SESSION['acesso']);
header('location:../login.html');

?>