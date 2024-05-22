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
    <title>Inicio</title>
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
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt">Pergunta 1</h1>
                  <img class="triangu-abert" src="img/trianguluFechado.png">
                  <img class="triangu-fecha" src="img/trianguluAberto.png">
                </div>

                <hr class="linha">
                <p class="respost">Resposta simples e direta ao ponto </p>
            </div>
        </div>
    </main>














    <!-- FOOTER -->
    <?php include 'footer.php' ?>
</body>
</html>
