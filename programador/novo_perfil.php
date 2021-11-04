<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="javascript" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/novo_perfil.css">
    <script type="text/javascript" src="scripts/login.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>Cadastrar Coordenador(a)</h1>
        <form action="../cruds/novo_perfil.php" method="post"></form>
        <form method="get" action="" id="dados_login">
            <div class="txt_field">
                <input type="email" name="email" required id="email">
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="senha" required id="senha">
                <span></span>
                <label>Senha</label>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example" name="acesso">
                <option selected>Selecione</option>
                <option value="1">Aluno(a)</option>
                <option value="2">Professor(a)</option>
                <option value="3">Cordenador(a)</option>
                <option value="4">Programadores</option>
                </select>
            </div>
            <div>
                <select name="escola" class="form-select" aria-label="Default select example">
                    <option selected value="0">Escola</option>
                    <option value="0">- -</option>
                    <?php
                        include '../cruds/option_escola.php';
                    ?>
                </select>
            </div>
            <input type="submit" value="Enviar">
            <hr>
        </form>
    </div>
</body>
</html>