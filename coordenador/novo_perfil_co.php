<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/novoperfil_co.css">
    <title>NOVO - Perfil</title>
</head>
<body>
    <form class="single" action="../cruds/novo_perfil.php" method="post">
        <h1>Register</h1>
        <hr>
        <div class="oneform">
            <input type="text" name="email" id="email" placeholder="E-Mail">
        </div>
        <div class="oneform">
            <input type="password" name="senha" id="senha" placeholder="Password">
        </div>

        <div class="Drop">
            <select name="acesso">
                <option selected>Selecione</option>
                <option value="1">Aluno(a)</option>
                <option value="2">Professor(a)</option>
            </select>
        </div>

        <div class="Drop">
            <select name="turma">
                <option value="null" selected>turma</option>
                <option value="null">--</option>
                <?php 
                    include '../cruds/option_turmas.php'; 
                ?>
            </select>
        </div>

        <div class="button">
            <input type="submit" value="Enviar">
        </div>
    </form>


    <div class="circle"></div>
</body>
</html>