<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consulta</h1>
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
                include '../cruds/option_escola.php';
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