<?php

include 'conexao.php';

$com = $con->prepare("select cod_imagem from postagens where cod_perfil = ? order by data_post desc");
$com->bindParam(1, $cod);
$com->execute();

if($com->rowCount() > 0);
{
	while($lin = $com->fetch(PDO::FETCH_OBJ))
	{   
		//$descricao = $linha->descricao_post;
		if($lin->cod_imagem != null || $lin->cod_imagem = ""){
			$cod_imagem_I = $lin->cod_imagem;

			$comII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
			$comII->bindParam(1,$cod_imagem_I);
			$comII->execute();

			$img = $comII->fetch(PDO::FETCH_OBJ);
			echo '<div class="col-3"><img src="../imagens/' . $img->nome_imagem . '"></div>';
		}
	}
}



?>