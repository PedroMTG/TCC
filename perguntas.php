<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rodape.css">
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
    <main class="duvidas-main">
        <div class="duvidas-cont">

            <!-- PERGUNTA 1 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per1" onclick="toggleDelt1Visibility()">O ateliê possui produto a pronta entrega?</h1>
                  <img class="triangulo1" onclick="toggleDelt1Visibility()" src="img/trianguluFechado.png" id="tri1">
                  <img class="triangulo2" onclick="toggleDelt1Visibility()" src="img/trianguluAberto.png" id="tri2">
                </div>

                <hr class="linha">
                <p class="respost" id="resp1">Não, todos os produtos da loja são feitos somente sob encomenda.</p>
            </div>

            <!-- PERGUNTA 2 -->
            <div class="perguntas-cont" >
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per2" onclick="toggleDelt2Visibility()">Posso devolver e/ou fazer a troca do(s) produtos(s) que recebi?</h1>
                  <img class="triangulo1" onclick="toggleDelt2Visibility()" src="img/trianguluFechado.png" id="tri3">
                  <img class="triangulo2" onclick="toggleDelt2Visibility()" src="img/trianguluAberto.png" id="tri4">
                </div>

                <hr class="linha">
                <p class="respost" id="resp2">Troca somente em casos que o produto venha com defeito.</p>
            </div>

            <!-- PERGUNTA 3 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per3" onclick="toggleDelt3Visibility()">Poderei cancelar meu pedido após a compra?</h1>
                  <img class="triangulo1" onclick="toggleDelt3Visibility()" src="img/trianguluFechado.png" id="tri5">
                  <img class="triangulo2" onclick="toggleDelt3Visibility()" src="img/trianguluAberto.png" id="tri6">
                </div>

                <hr class="linha">
                <p class="respost" id="resp3">Sim, o cancelamento pode ser feito até 48 horas após a confirmação do pagamento.</p>
            </div>

            <!-- PERGUNTA 4 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per4" onclick="toggleDelt4Visibility()">Quando os produtos começarão a ser confeccionados?</h1>
                  <img class="triangulo1" onclick="toggleDelt4Visibility()" src="img/trianguluFechado.png" id="tri7">
                  <img class="triangulo2" onclick="toggleDelt4Visibility()" src="img/trianguluAberto.png" id="tri8">
                </div>

                <hr class="linha">
                <p class="respost" id="resp4">Somente após a confirmação de pagamento.</p>
            </div>

            <!-- PERGUNTA 5 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per5" onclick="toggleDelt5Visibility()">Qual é o prazo médio de confecção dos produtos?</h1>
                  <img class="triangulo1" onclick="toggleDelt5Visibility()" src="img/trianguluFechado.png" id="tri9">
                  <img class="triangulo2" onclick="toggleDelt5Visibility()" src="img/trianguluAberto.png" id="tri10">
                </div>

                <hr class="linha">
                <p class="respost" id="resp5">O prazo de produção de 1 produto é de 15 à 20 dias úteis. 
                  <br><br>Consulte a vendedora para que ela estipule o prazo nos seguintes casos:
                  <br>- Compra de 2 produtos ou mais.
                  <br>- Urgência na entrega do(s) produtos(s).</p>
            </div>

            <!-- PERGUNTA 6 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per6" onclick="toggleDelt6Visibility()">Qual é a forma de envio dos produtos?</h1>
                  <img class="triangulo1" onclick="toggleDelt6Visibility()" src="img/trianguluFechado.png" id="tri11">
                  <img class="triangulo2" onclick="toggleDelt6Visibility()" src="img/trianguluAberto.png" id="tri12">
                </div>

                <hr class="linha">
                <p class="respost" id="resp6">Os produtos serão enviados somente pelos Correios, via PAC ou Sedex.</p>
            </div>

            <!-- PERGUNTA 7 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per7" onclick="toggleDelt7Visibility()">Percebi que preenchi algum dado e/ou endereço errado depois finalizei a compra. O que devo fazer?</h1>
                  <img class="triangulo1" onclick="toggleDelt7Visibility()" src="img/trianguluFechado.png" id="tri13">
                  <img class="triangulo2" onclick="toggleDelt7Visibility()" src="img/trianguluAberto.png" id="tri14">
                </div>

                <hr class="linha">
                <p class="respost" id="resp7">Entre em contato com a vendedora o mais rápido possível para verificar se seu pedido já foi encaminhado e informe os dados ou endereço corretos.
                  <br><br>No entanto, o ateliê adverte que a responsabilidade pelos dados preenchidos é totalmente do cliente, e que a vendedora não se responsabiliza nesses casos, pois a loja oferece a opção do usuário corrigir os dados para evitar tais incidentes.
                </p>
            </div>

            <!-- PERGUNTA 8 -->
            <div class="perguntas-cont">
                <div class="duvidas-cont-cima">
                  <h1 class="pergunt" id="per8" onclick="toggleDelt8Visibility()">Como lavar meu amigurumi de forma correta?</h1>
                  <img class="triangulo1" onclick="toggleDelt8Visibility()" src="img/trianguluFechado.png" id="tri15">
                  <img class="triangulo2" onclick="toggleDelt8Visibility()" src="img/trianguluAberto.png" id="tri16">
                </div>

                <hr class="linha">
                <p class="respost" id="resp8">Siga os seguintes passos:
                  <br><br>1. Lave com sabão neutro, sem auxílio de escova ou outros objetos;
                  <br>2. Retire o excesso de água;
                  <br>3. Coloque-o em uma fronha ou saco de tecido e, em seguida, coloque para centrifugar na máquina de lavar;
                  <br>4. Secar na sombra.
                </p>
            </div>
        </div>
    </main>














    <!-- FOOTER -->
    <?php include 'footer.php' ?>
</body>
</html>
