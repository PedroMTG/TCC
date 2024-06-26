<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conta.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="js/script.js" defer></script>
    <title>Inicio</title>
</head>
<body class="pagina-principal">
     <?php include 'header2.php' ?>

    <div class="conta">
        <div class="conta-container">
            <div class="esquerda">
                <img src="img/user.png">
                <button class="alterar-foto">Alterar foto</button>
                <button class="sair-conta"><a href="">Sair da conta</a></button>
            </div>

            <div class="direita"></div>
        </div>

        <div class="botao-container">
            <div class="editar-perfil">
                <button class="editar-perfil-botao">Editar perfil</button>
            </div>
                <button class="remover-perfil"><a href="">Remover perfil</a></button>
        </div>
    </div>
</body>
</html>
