<?php

include 'conexao.php';
$cod = $_SESSION['cod_perfil'];

$comando = $con->prepare("select cod_post, descricao_post from postagens where cod_perfil = ?");
$comando->bindParam(1, $cod);
if ($comando->execute())
{
	if($comando->rowCount() > 0);
	{
		while($linha = $comando->fetch(PDO::FETCH_OBJ)){
			$descricao = $linha->descricao_post;
			echo $linha->descricao_post.'<br>';
			$cod_post = $linha->cod_post;
			$comandoII = $con->prepare("select imagem from imagens where cod_post = ?");
			$comandoII->bindParam(1,$cod_post);
			$comandoII->execute();
			while($linhaII = $comandoII->fetch(PDO::FETCH_OBJ)){
				echo '<div class="col-3">
						<img class="card-img-top" src="data:image/jpg;base64,' . base64_encode($linhaII->imagem) . '">
					</div>';
			}
			
		}
	}
	else{
		echo "Sem postagens ainda";
	}
}


?>