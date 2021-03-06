<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/novo_perfil.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">!-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="javascript" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/login.js"></script>
    <title>Novo Cadastro</title>
</head>
<body>
    <div class="center">
        <h1>Cadastrar Coordenador(a)</h1>
        <form method="post" action="../cruds/novo_perfil.php" id="dados_login">
            <div class="txt_field">
                <input type="text" name="email" required id="email">
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
                <option value="1">Aluno(a)</option>
                <option value="2">Professor(a)</option>
                <option selected value="3">Cordenador(a)</option>
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
        </form>
    </div>

<div class="waves">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,256L0,224L288,224L288,192L576,192L576,64L864,64L864,96L1152,96L1152,32L1440,32L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z"></path>
      </svg>
    </div>
</body>
</html>