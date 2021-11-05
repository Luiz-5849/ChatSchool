<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="../cruds/novo_perfil.php" method="post">
            <div>
                <label>E-mail</label>
                <input type="text" name="email" id="email" placeholder="email">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="senha">
            </div>
            <div>
                <select name="acesso">
                    <option selected>Selecione</option>
                    <option value="1">Aluno(a)</option>
                    <option value="2">Professor(a)</option>
                </select>
            </div>
            <div>
                <select name="turma">
                    <option selected>Selecione</option>
                    <option value="null">--</option>
                    <?php include '../cruds/option_turmas.php'; ?>
                </select>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </body>
</html>