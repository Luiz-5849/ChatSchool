
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/perfil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/dropdownprofile.js"></script>
    <?php
    $cod = $_POST['cod_perfil'];
      include '../cruds/dados_perfilFulano.php';
    ?>
    <title>PERFIL</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light nav-top">
        <div class="container nav-container">
          <a class="navbar-brand" href="#">
            <a href="feed.php"><img src="../assets/logo.png" alt=""></a>
          </a>
          <form class="d-flex">
            <input class="form-control" type="search" placeholder="@    Search" aria-label="Search" aria-describedby="basic-addon1">
        </form>

            <div class="icons">
                <a href="feed.php" class="one"><img src="../icons/house.svg" alt=""></a>
                <a href="#" class="two"><img src="../icons/gear-wide.svg" alt=""></a>


                <a href="../cruds/deslogar.php" class="three"><img src="../icons/door-open-fill.svg" alt=""></a>
                <a href="perfil.php" class="four"><img src="../imagens/<?php echo $imagem_user; ?>" alt=""></a>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">

                               <!--<div class="col-3">
                                <input type="file" id="flImage" name="flImage" accept="image/*">
                                <img class="perfil" src="../imagens/<?php echo $imagem; ?>" alt="Selecione uma Imagem" id="imgPhoto">
                            </div>!-->

                              <div class="ImageContainer">
                                <img src="../imagens/<?php echo $imagem; ?>" alt="Selecione uma Imagem" id="image">
                              </div>
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-8 col-lg-5">
                                        <h2 class="username"><?php echo $nome; ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p class="profile-datas"><strong><?php echo $publicacoes; ?></strong> publicações</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="profile-datas"><strong><?php echo $seguidores; ?></strong> seguidores</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="profile-datas"><strong><?php echo $seguindo; ?></strong > seguindo</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="" method="post" id="seguir_form">
                                      <input type="submit" value="seguir" id="seguir">
                                      <input type="hidden" value="<?php echo $cod; ?>" name="seguir">
                                      </form>
                                        <p class="profile-desc">
                                            <?php echo $bio; ?>
                                            <form action="" method="post">
                                            <input type="submit" value="adicionar bio">
                                            </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>

                    <hr size="3" width="100%" color="#EEEEEE" style="margin: 0%;">

                    <ul class="nav nav-tabs nav-post" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active nav-publi-1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-grid-3x3-gap"></i>Publicações</a>
                        </li>
                    </ul>

                    <?php
                    include '../cruds/posts_perfilFulano.php';
                    ?>



                </div>
                <div class="col-0 col-md-2"></div>
            </div>
        </div>
    </section>

</body>
</html>