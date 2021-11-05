<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nova turma</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form name="" id="" method="get" action="../cruds/nova_turma.php">
        <div>
            <select class="form-select" aria-label="Default select example" name="curso">
                <option selected>Curso</option>
                <?php include '../cruds/option_cursos.php' ?>
            </select>
        </div>
        <div>
            <select name="modulo_ano">
                <option selected value="">Selecione</option>
                <option value="1">1º ano/módulo</option>
                <option value="2">2º ano/módulo</option>
                <option value="3">3º ano/módulo</option>
                <option value="4">4º módulo</option>
            </select>
        </div>
        <div>
            <select name="nome_turma">
                <option selected value="">Selecione</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
        <div>
            <select name="periodo">
                <option selected value="0">Selecione</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</body>
</html>