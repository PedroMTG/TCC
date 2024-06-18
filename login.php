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
    <script src="js/script.js" defer></script>
    <title>Login</title>
</head>
<body>

   <main>
     
            <a href="inicio.php"><img class="back" src="img/back.png" alt=""></a>
     

    <div class="pro-login">
    <div class="login">
        <div class="login-esquerda">
            <img src="img/logo.jpg" class="logo-login"alt="">
        </div>

        <div class="login-direita">
            <h1 class="font_1">Login</h1>
            <input type="text" name="email" id="email" placeholder='E-mail' class="campo-dados" spellcheck="false">
        
            <div class="eye">
                <input type="password" name="senha" id="senha" placeholder='Senha' class="campo-dados" spellcheck="false">
                    <span id="toggle-password" onclick="togglePasswordVisibility()" class="aberto"><i class="ph ph-eye"></i></span>
                    <span id="toggle-password" onclick="togglePasswordVisibility()" class="fechado"><i class="ph ph-eye-slash"></i></span>
            </div>                                                                                                                                  

            <div class="acessar">
                <button class="acessar-botao">Acessar</button>
            </div>
            <a href="cadastro.php" class="n-tenho-conta">Não tenho uma conta</a>
        </div>
    </div>
    </div>
   </main>
</body>
</html>
