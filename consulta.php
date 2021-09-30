<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select name="acesso">
            <option selected value="0">Tipo do perfil</option>
            <option value="0">- -</option>
            <option value="1">Aluno(a)</option>
            <option value="2">Professor(a)</option>
            <option value="3">Cordenador(a)</option>
          </select>
          
          <select name="escola">
            <option selected value="0">Escola</option>
            <option value="0">- -</option>
            <?php
                include 'conexao.php';

                $comando=$con->prepare("select nome_escola from escolas");
                $comando->execute();
                while($linha = $comando->fetch(PDO::FETCH_OBJ)){
                    echo '<option value="'. $linha->nome_escola .'">'. $linha->nome_escola .'</option>';
                }
            ?>
          </select>

        <select name="acesso">
            <option selected value="0">Selecione</option>
            <option value="1">Aluno(a)</option>
            <option value="2">Professor(a)</option>
            <option value="3">Cordenador(a)</option>
          </select>
    </form>
</body>
</html>