
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>ChatSchool</title>
</head>
<body>

<!--barra de navegação!-->
    <nav class="navbar navbar-light bg-light nav-top">
        <div class="container nav-container">
            <nav class="nav col-4">
                <a href="feed.html"><img src="assets/logo.png" alt=""></a>
            </nav>
                <ul class="nav justify-content-center nav-fixed col-4">
                    <li class="nav-item">
                        <input class="form-nav" type="search" placeholder="@    Search" aria-label="Search" aria-describedby="basic-addon1">
                    </li>
                </ul>
                    <ul class="nav justify-content-end col-4">
                        <li class="nav-item">
                            <a href="feed.html" class="one"><img src="icons/house.svg" alt=""></a>
                            <a href="#" class="two"><img src="icons/gear-wide.svg" alt=""></a>
                            <a href="cruds/deslogar.php" class="three"><img src="icons/door-open-fill.svg" alt=""></a>
                            <a href="perfil.php" class="four"><img src="assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt=""></a>
        </div>
    </nav>
<!--fim da barra de navegação!-->


<!--Postagem do feed-->
    <main class="main">
        <div class="post">
            <div class="infousuario">
                <div class="imagem">
                    <img src="assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt="">
                </div>
                   <h1>Gabriel Ribeiro</h1>
            </div>
            <form action="" class="textPost">
                <textarea name="textarea" placeholder="Faça uma publicação:"></textarea>
                <div class="navegacao">
                    <div class="icons">
                        <button class="btnfileForm"><img src="icons/image-fill.svg" alt=""></button>
                    </div>
                    <button type="submit" class="btn">Postar</button>
                </div>
            </form>
        </div>
<!--Fim da Postagem do Feed-->


<!--Feed--> 
    <div class="postagens">
        <div class="post">
            <div class="infoPost">
                <div class="imgPost">
                    <img src="assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt="">
                </div>
            
                <h1>Mikael Lucas</h1>
        
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="actionButton">
                <button type="button" class="filePostheart"><img src="icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
                <button type="button" class="filePost"><img src="icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
            </div>
        </div>
    </div> 

    <div class="postagens">
        <div class="post">
            <div class="infoPost">
                <div class="imgPost">
                    <img src="assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt="">
                </div>
        
                    <h1>Henrique Oliveira</h1>
         
             
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="actionButton">
                <button type="button" class="filePostheart"><img src="icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
                <button type="button" class="filePost"><img src="icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
            </div>
        </div>
    </div> 

    <div class="postagens">
        <div class="post">
            <div class="infoPost">
                <div class="imgPost">
                    <img src="assets/lucas-gouvea-aoEwuEH7YAs-unsplash.jpg" alt="">
                </div>

                    <h1>Adriel Montovanni</h1>

                    
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="actionButton">
                <button type="button" class="filePostheart"><img src="icons/12138redheart_110427.png" alt="Curtir">Curtir</button>
                <button type="button" class="filePost"><img src="icons/commentlinear_106230.png" alt="Comentar">Comentar</button>
            </div>
        </div>
    </div> 
<!--Fim do Feed-->
    </main>   
</body>
</html>
