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
    <form>
        <div>
            <select class="form-select" aria-label="Default select example" name="acesso">
                <option selected>Curso</option>
                <?php include '../cruds/option_cursos.php' ?>
            </select>
        </div>
        <div>
            <select name="período">
                <option selected value="0">Selecione</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>
    </form>
</body>
</html>