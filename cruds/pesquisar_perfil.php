<?php

include 'conexao.php';

$pesquisado = "%".$_GET['pesquisar']."%";

//SELECT perfil.apelido, perfil.nome, perfil.cod_perfil, imagens.nome_imagem FROM perfil inner join imagens on perfil.cod_imagem = imagens.cod_imagem where nome like ? or login like ? or apelido like ?

$comando=$con->prepare("SELECT apelido, nome, cod_perfil FROM perfil where nome like ? or login like ? or apelido like ?");
$comando->bindParam(1,$pesquisado);
$comando->bindParam(2,$pesquisado);
$comando->bindParam(3,$pesquisado);

$comando->execute();
$linha=$comando->fetch(PDO::FETCH_OBJ);
//echo $linha->apelido;
$saida = json_encode($linha);
echo $saida;
