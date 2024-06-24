<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="js/script.js" defer></script>
    <title>Inicio</title>

</head>
<body>
    <!-- HEADER -->
     <?php include 'header.php' ?>

     <div class="body-carrinho">
        <div class="carrinho-esquerdo">

        <!-- abre item do carrinho -->
            <div class="item">
                <div class="item-nome">Nome_item</div>
                <hr>
                <div class="item-meio">
                    <div class="item-foto">
                        <img src="img/cachorro.jpg" alt="" class="foto-img">
                        <div class="botao-excluir">Excluir</div>
                            <div class="carrinhoA">
                                <div class="item-carrinho">
                                    <i class="ph ph-plus adicionar"></i>
                                    <span class="quantidade">0</span>
                                    <i class="ph ph-minus remover"></i>
                                </div>
                            </div>
                        </div>
                    <div class="item-preco">999,99 R$</div>
                </div>
                <hr>
                <div class="item-frete">
                    <div class="fretee">Frete</div>
                    <div class="preco-frete">Gratis</div>
                </div>
            </div>
        <!-- fexa item do carrinho -->

        </div>

        <div class="carrinho-direito">
            <div class="total">
                <div class="total-nome">Total da Compra</div>

                <hr>

                <div class="total-preco">
                    <div class="divProdutoNome">
                        <div class="divProdutoNomeItem">XXXXXX(2)</div>
                        <div class="divProdutoNomeItem">XXXXXX(1)</div>
                        <div class="divProdutoNomeItemFrete">Frete</div>
                    </div>
                    <div class="divProdutoPreco">
                        <div class="divProdutoNomePreco">R$ 300.00</div>
                        <div class="divProdutoNomePreco">R$ 300.00</div>
                        <div class="divProdutoNomePrecoFrete">Gratis</div>
                    </div>

                </div>

                <hr>

                <div class="total-botao">

                    <div class="TOTAL">
                        <div>Total</div>
                        <div>R$ 900.00</div>
                    </div>

                    <div class="botaoTerminarCompra">
                        <button class="terminarCompra" >Terminar compra</button>
                    </div>
                </div>
            </div>
        </div>
     </div>

        <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
</html>
