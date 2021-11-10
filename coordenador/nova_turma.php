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
    <script src="main.js"></script>
    <link rel="stylesheet" href="../css/novaturma.css">
    <title>Nova Turma</title>
</head>
<body>
    <form class="topo" name="" id="" method="post" action="../cruds/nova_turma.php">
        <h1>Nova Turma</h1>
        <hr>
        <div class="dropOne">
            <select name="curso">
                <option selected>Curso</option>
                <?php include '../cruds/option_cursos.php'; ?>
            </select>
        </div>

        <div class="dropOne">
            <select name="modulo_ano">
                <option selected value="">Ano/Módulo</option>
                <option value="1">1º ano/módulo</option>
                <option value="2">2º ano/módulo</option>
                <option value="3">3º ano/módulo</option>
                <option value="4">4º módulo</option>
            </select>
        </div>

        <div class="dropOne">
            <select name="nome_turma">
                <option selected value="">Turma</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        <div class="dropOne">
            <select name="periodo">
                <option selected value="0">Período</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>

        <div class="button">
            <input type="submit" value="Cadastrar">
        </div>
    </form>

    <div class="circle"></div>
    <div class="circleTwo"></div>
</body>
</html>