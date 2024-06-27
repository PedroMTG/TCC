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

     <!-- setinha pra voltar -->
     <a href="inicio.php"><img class="back" src="img/back.png" alt=""></a>




    <div class="conta">
        <div class="conta-container">
            <!-- ESQUERDA -->
            <div class="esquerda">
                <img src="img/user.png">
                <button class="alterar-foto">Alterar foto</button>
                <button class="sair-conta"><a href="">Sair da conta</a></button>
            </div>

            <!-- DIREITA -->
            <div class="direita">
                <!-- col1 -->
                <div class="coluna1">
                    <div class="nome-cont">
                        <div class="nome">
                            <span class="texto-da-coluna">Nome de Usuário</span>
                            <span class="dados-da-coluna">Nome</span>
                        </div>
                    </div>
                </div>

                <!-- col2 -->
                <div class="coluna2">
                    <div class="telefone-cont">
                            <div class="telefone">
                                <span class="texto-da-coluna">Telefone/celular</span>
                                <span class="dados-da-coluna">(xx) xxxxx-xxxx</span>
                            </div>
                        </div>
                </div>

                <!-- col3 -->
                <div class="coluna3">
                    <div class="dados6-cont">
                            <div class="endereco">
                                <span class="texto-da-coluna">Endereço</span>
                                <span class="dados-da-coluna">Rua de tal</span>
                            </div>
                            <div class="numero-casa">
                                <span class="texto-da-coluna">n°</span>
                                <span class="dados-da-coluna">XX</span>
                            </div>
                            <div class="complemento">
                                <span class="texto-da-coluna">Complemento</span>
                                <span class="dados-da-coluna">BL xx AP xxxxxxxx</span>
                            </div>
                            <div class="bairro">
                                <span class="texto-da-coluna">Bairro</span>
                                <span class="dados-da-coluna">Bairro de tal</span>
                            </div>
                            <div class="cidade">
                                <span class="texto-da-coluna">Cidade</span>
                                <span class="dados-da-coluna">cidade tal</span>
                            </div>
                            <div class="uf">
                                <span class="texto-da-coluna">UF</span>
                                <span class="dados-da-coluna">AB</span>
                            </div>
                    </div>
                </div>

                <!-- col4 -->
                <div class="coluna4">
                    <div class="ultimo-dado-cont">
                            <div class="email">
                                <span class="texto-da-coluna">E-mail</span>
                                <span class="dados-da-coluna">seuemail@gmail.com</span>
                            </div>
                            <div class="senha">
                                <span class="texto-da-coluna">Senha</span>
                                <span class="dados-da-coluna">***********</span>
                            </div>
                        </div>
                </div>
            </div>
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
