<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="script-pergunt.js" defer></script>
    <script src="script.js" defer></script>
    <title>Dúvidas Frequentes</title>
</head>
<body class="pagina-principal">

    <!-- HEADER -->
     <?php include 'header.php' ?>
    <!-- MENU -->
    <hr>
        <div class="menu">
        <div class="dropdown row col-5">
            <button class="btn btn-primaria dropdown-toggle selecao border-0 text-body-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
            </button>
            <ul class="dropdown-menu border-0 row col-8">
                <li class="dropdown-item">Categorias</li>
                <li><a class="dropdown-item d-table-row" href="#">yyy</a></li>
                <li><a class="dropdown-item d-table-row" href="#">Promoção</a></li>
                <li><a class="dropdown-item d-table-row" href="#">Promoção</a></li>
                <li><a class="dropdown-item d-table-row" href="#">Promoção</a></li>
                <li><a class="dropdown-item d-table-row" href="#">Promoção</a></li>
                <hr>
                <li><a class="dropdown-item" href="#">Promoção</a></li>
                <li><a class="dropdown-item" href="perguntas.php">Duvidas frequentes</a></li>
            </ul>
        </div>
    
        <a href="login.php"><img src="img/user.png"class="user"></a>
        </div>
        <hr>


        <!-- MAIN - PERGUNTAS -->
    <main>
        <div class="duvidas-cont">

            <!-- PERGUNTA 1 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per1">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt1Visibility()" src="img/trianguluFechado.png" id="tri1">
                  <img class="triangulo2" onclick="toggleDelt1Visibility()" src="img/trianguluAberto.png" id="tri2">
                </div>

                <hr class="linha">
                <p class="respost" id="resp1">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 2 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per2">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt2Visibility()" src="img/trianguluFechado.png" id="tri3">
                  <img class="triangulo2" onclick="toggleDelt2Visibility()" src="img/trianguluAberto.png" id="tri4">
                </div>

                <hr class="linha">
                <p class="respost" id="resp2">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 3 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per3">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt3Visibility()" src="img/trianguluFechado.png" id="tri5">
                  <img class="triangulo2" onclick="toggleDelt3Visibility()" src="img/trianguluAberto.png" id="tri6">
                </div>

                <hr class="linha">
                <p class="respost" id="resp3">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 4 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per4">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt4Visibility()" src="img/trianguluFechado.png" id="tri7">
                  <img class="triangulo2" onclick="toggleDelt4Visibility()" src="img/trianguluAberto.png" id="tri8">
                </div>

                <hr class="linha">
                <p class="respost" id="resp4">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 5 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per5">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt5Visibility()" src="img/trianguluFechado.png" id="tri9">
                  <img class="triangulo2" onclick="toggleDelt5Visibility()" src="img/trianguluAberto.png" id="tri10">
                </div>

                <hr class="linha">
                <p class="respost" id="resp5">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 6 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per6">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt6Visibility()" src="img/trianguluFechado.png" id="tri11">
                  <img class="triangulo2" onclick="toggleDelt6Visibility()" src="img/trianguluAberto.png" id="tri12">
                </div>

                <hr class="linha">
                <p class="respost" id="resp6">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 7 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per7">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt7Visibility()" src="img/trianguluFechado.png" id="tri13">
                  <img class="triangulo2" onclick="toggleDelt7Visibility()" src="img/trianguluAberto.png" id="tri14">
                </div>

                <hr class="linha">
                <p class="respost" id="resp7">Resposta simples e direta ao ponto </p>
            </div>

            <!-- PERGUNTA 8 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per8">Pergunta 1</h1>
                  <img class="triangulo1" onclick="toggleDelt8Visibility()" src="img/trianguluFechado.png" id="tri15">
                  <img class="triangulo2" onclick="toggleDelt8Visibility()" src="img/trianguluAberto.png" id="tri16">
                </div>

                <hr class="linha">
                <p class="respost" id="resp8">Resposta simples e direta ao ponto </p>
            </div>
        </div>
    </main>














    <!-- FOOTER -->
    <?php include 'footer.php' ?>
</body>
</html>
