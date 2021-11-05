<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/feed.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../scripts/dropdown.js"></script>
  <title>ChatSchool</title>
  <?php
  session_start();
  include '../cruds/dados_user_feed.php';
  ?>
</head>

<body>

  <!--barra de navegação!-->
  <nav class="navbar navbar-light bg-light nav-top">
    <div class="container nav-container">
      <nav class="nav col-4">
        <a href="feed.html"><img src="../assets/logo.png" alt=""></a>
      </nav>
      <ul class="nav justify-content-center nav-fixed col-4">
        <li class="nav-item">
          <input class="form-nav" type="search" placeholder="@    Search" aria-label="Search" aria-describedby="basic-addon1">
        </li>
      </ul>
      <ul class="nav justify-content-end col-4">
        <li class="nav-item">
          <a href="feed.html" class="one"><img src="../icons/house.svg" alt=""></a>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><img src="../icons/gear-wide.svg" alt=""></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#home">Home</a>
              <a href="#about">About</a>
              <a href="../cruds/deslogar.php">Sair</a>
            </div>
          </div>
          <a href="../aluno_professor/perfil.php" class="four"><img src="../imagens/<?php echo $nome_img_user; ?>" alt=""></a>
    </div>
  </nav>
  <!--fim da barra de navegação!-->


  <main class="main">
    <!--Comunicados-->
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Comunicados para Escola
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <?php include '../cruds/exibir_comunicados_escola.php'; ?>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Para Sala
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Comunicados pessoais
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div> -->
    </div>

    <!--Fim dos comunicados-->

    <!--Postagem do feed-->
    <div class="post">
      <div class="infousuario">
        <div class="imagem">
          <img src="../imagens/<?php echo $nome_img_user; ?>" alt="">
        </div>
        <h1><?php echo $apelido_user; ?></h1>
      </div>
      <form action="../cruds/toPost.php" enctype="multipart/form-data" class="textPost" id="publiPost" method="post">
        <textarea name="textarea" placeholder="Faça uma publicação:" id="textarea"></textarea>
        <div class="navegacao">
          <div class="icons">
            <input type="file" name="arquivo" id="">
          </div>
          <button type="submit" class="btn">Postar</button>
        </div>
      </form>
    </div>
    <!--Fim da Postagem do Feed-->


    <!--Feed-->
    <?php
    include '../cruds/posts_feed.php';
    ?>
    <!--Fim do Feed-->
  </main>

  <!--<script type="module" src="../scripts/form.js"></script>-->

</body>

</html>