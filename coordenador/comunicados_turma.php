<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicar</title>
    
</head>
<body>
    <h1>COMUNICAR TURMA</h1>
    <form name="" id="" action="../cruds/comunicar_turma.php" method="post">
        <select name="turma">
            <option selected value="0">Turma</option>
            <?php include '../cruds/option_turmas.php'; ?>
        </select>
        <div>
            <label>Comunicado</label>
            <input type="text" name="comunicado">
        </div>
        <div>
            <input type="submit" value="Comunicar">
        </div>
    </form>

</body>
</html>