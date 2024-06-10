<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="script.js" defer></script>
    <title>Inicio</title>
</head>
<body>

    <main class="cadastro">
        <!-- ESQUERDA -->
        <div class="esquerda-cadastro">
            <a href="login.php"><img class="back-cadastro" src="img/back.png"></a>
            <img src="img/logo1.png">
        </div>

        <!-- DIREITA -->
      
        <div class="direita-cadastro">
            <div class="alinhamentos">
            <div class="coluna1">
                <div class="nome">
                    <p>Nome de usuário</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>                            
                </div>
            </div>

            <div class="coluna2">
                <div class="cpf">
                    <p>CPF/CNPJ</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="telefone">
                    <p>Telefone/Celular</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
            </div>

            <div class="coluna3">
                <div class="endereco">
                    <p>Endereço</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="numero-casa">
                    <p>N°</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="complemento">
                    <p>Complemento</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
            </div>

            <div class="coluna4">
                <div class="bairro">
                    <p>Bairro</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="cidade">
                    <p>Cidade</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="estado">
                    <p>UF</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="cep">
                    <p>CEP</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
            </div>

            <div class="coluna5">
                <div class="email">
                    <p>E-mail</p>
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
            </div>


            <div class="coluna6">
                <div class="senha">
                    <p class="">Criar Senha</p>  
                    <form action="">
                        <input type="text" class="dados-cadastrados">
                    </form>  
                </div>
                <div class="link-back">
                    <p>Ja possui conta?</p><a href="login.php"><p>Login</p></a>
                </div>
                <div>
                    <div class="cadastrar">
                        <button class="cadastrar-botao">Cadastrar</button>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </main>







    
</body>
</html>
