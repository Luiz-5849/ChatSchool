<?php

include 'conexao.php';

$cod_perfil_user = $_SESSION['cod_perfil'];

if ($_POST['pesquisar'] == null || $_POST['pesquisar'] == "") {
    header("location:../aluno_professor/perfil.php");
}else{
    $pesquisado = "%" . $_POST['pesquisar'] . "%";

    $comando=$con->prepare("SELECT apelido, nome, cod_perfil, cod_imagem FROM perfil where cod_perfil <> ? and (acesso = 1 or acesso = 2) and (nome like ? or login like ? or apelido like ?)");
    $comando->bindParam(1,$cod_perfil_user);
    $comando->bindParam(2,$pesquisado);
    $comando->bindParam(3,$pesquisado);
    $comando->bindParam(4,$pesquisado);

    $comando->execute();
    while($linha = $comando->fetch(PDO::FETCH_OBJ)){
        
        if ($linha->cod_imagem != null || $linha->cod_imagem != "") {
            $comandoII = $con->prepare("select nome_imagem from imagens where cod_imagem = ?");
            $comandoII->bindParam(1, $linha->cod_imagem);
            $comandoII->execute();
            $linhaII = $comandoII->fetch(PDO::FETCH_OBJ);

            $img = $linhaII->nome_imagem;

        }else{
            $img = "blank-profile-picture-973460__480.png";
        }
        echo '<form method="post" action="perfil_doFulano.php">
                <span>
                <button type="submit">
                    <img src="../imagens/' . $img . '" alt="">
                    <div class="container" id="barra">
                        <div class="row">
                            <p class="name_apelido">' . $linha->apelido . '</p>
                        </div>
                        <div class="row">
                            <p class="name_apelido">' . $linha->nome . '</p>
                        </div>
                        <div>
                            <input type="hidden" value="' . $linha->cod_perfil . '" name="cod_perfil">
                        </div>
                    </div>
                    </button>
                </span>
                </form>';
            }
}

/*        echo '<a id="">
                <form method="post" action="">
                    <div class="centroul">
                        <div class="containerChat">
                            <img src="../imagens/' . $img . '" alt="">
                            <div class="container" id="barra">
                                <div class="row">
                                    <p class="name_apelido">' . $linha->apelido . '</p>
                                </div>
                                <div class="row">
                                    <p class="name_apelido">' . $linha->nome . '</p>
                                </div>
                                <div>
                                    <input type="hidden" value="' . $linha->cod_perfil . '" name="cod_perfil">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </a>';
*/