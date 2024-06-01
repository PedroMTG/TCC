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
    <script src="script.js" defer></script>
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

    <!-- MAIN -->
    <main>

     <!-- CARROUSEL -->
    
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner d-block justify-content-center">
    <div class="carousel-item active">
        <img src="img/fundo1.jpeg" class="d-block w-100 p Carrosel-mobile"> 
        <img src="img/mobile01.png" class="d-block w-100 p Carrosel-desktop"> 
    </div>
    <div class="carousel-item">
     <img src="img/fundo2.jpeg" class="d-block w-100 Carrosel-mobile"> 
     <img src="img/mobile02.png" class="d-block w-100 Carrosel-desktop"> 
    </div>
    <div class="carousel-item">
      <img src="img/fundo3.png" class="d-block w-100 Carrosel-mobile">
      <img src="img/mobile3.jpeg" class="d-block w-100 Carrosel-desktop">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
   
    <!-- PRODUTOS -->
      <!-- Desc1 -->
    <div class="d-flex justify-content-center">
      <h1 class="font_1">Destaques da loja</h1>
    </div>

  <div class="d-flex">
    <div class="card produto" style="width: 18rem;">
      <img src="img/cachorro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gatinho cinza - Amigurumi</h5>
          <p class="card-text preco">R$300,00</p>
        </div>
    </div>

    <div class="card produto" style="width: 18rem;">
      <img src="img/cachorro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gatinho cinza - Amigurumi</h5>
          <p class="card-text preco">R$300,00</p>
        </div>
    </div>
  </div>

    </main>

    <?php include 'footer.php' ?>
</body>
</html>
