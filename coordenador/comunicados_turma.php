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
    <link rel="stylesheet" href="../css/comunicados_turma.css">
    <title>Comunicado para Turma</title>
</head>
<body>
    <form class="up" name="" id="" action="../cruds/comunicar_turma.php" method="post">
        <h1>COMUNICAR TURMA</h1>
        <hr>

    <div class="drop">
        <select name="turma">
            <option selected value="0">Turma</option>
            <?php include '../cruds/option_turmas.php'; ?>
        </select>
    </div>

    <div class="comunit">
        <textarea name="comunicado" id="comunicado" cols="30" rows="3" placeholder="Faça uma Publicação:"></textarea>
        <!--<input type="text" name="comunicado">!-->
    </div>

    <div class="button">
        <input type="submit" value="Comunicar">
    </div>
    </form>

    <div class="circle"></div>

    <div class="imgHome">
        <img src="../assets/undraw_work_chat_re_qes4.svg" alt="">
    </div>
</body>
</html>