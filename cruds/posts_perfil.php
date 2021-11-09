<?php

include 'conexao.php';
$cod = $_SESSION['cod_perfil'];

$comando = $con->prepare("select descricao_post, cod_imagem from postagens where cod_perfil = ? order by data_post desc");
$comando->bindParam(1, $cod);
if ($comando->execute())
{
	if($comando->rowCount() > 0);
	{
		while($linha = $comando->fetch(PDO::FETCH_OBJ))
		{   
			$descricao = $linha->descricao_post;
			$cod_imagem = $linha->cod_imagem;

			$comandoII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
			$comandoII->bindParam(1,$cod_imagem);
			$comandoII->execute();

			$img = $comandoII->fetch(PDO::FETCH_OBJ);
			
			echo '<div class="col-3"><img src="../imagens/' . $img->nome_imagem . '"></div>';
		}
	}
}


?>