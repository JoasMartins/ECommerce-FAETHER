<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrinho</title>
</head>

<body>
    <?php include("../componentes/header.php"); ?>

    <?php
    include("../config-database.php");

    $sql = "SELECT * FROM `carrinho`";
    $resultado = $MySQLi->query($sql) or trigger_error($MySQLi->error, E_USER_ERROR);

    if ($resultado->num_rows == 0) {
        $vazio = true;
    } else {
        $vazio = false;
    }
    ?>

    <main id="carrinho" >
        <h1>CARRINHO</h1>
        <hr />

        <div id="container" <?php if ($vazio === true) echo "style='display: none;'"; ?>>
            <div id="produtos">
                <?php


                $somaProdutos = 0;


                $sql = "SELECT * FROM `carrinho`";
                $resultado = $MySQLi->query($sql) or trigger_error($MySQLi->error, E_USER_ERROR);



                while ($item = $resultado->fetch_object()) {
                    $id = $item->idItem;
                    $idItem = $item->id;

                    $sqlBuscarProduto = "SELECT * FROM `produtos` WHERE id = '$id'";
                    $item = $MySQLi->query($sqlBuscarProduto) or trigger_error($MySQLi->error, E_USER_ERROR);

                    $produto = mysqli_fetch_array($item);
                    $produtoNome = $produto['produtoNome'];
                    $produtoPreco = $produto['produtoPreco'];
                    $produtoImagem = $produto['produtoImagem'];

                    $somaProdutos += $produtoPreco;

                    echo "<div class='produto-carrinho'>";
                    echo "<img src='../$produtoImagem' alt='$produtoImagem'/>";
                    echo "<div>";
                    echo "<p id='nome-produto'>$produtoNome</p>";
                    echo "<button onclick='excluirItem($idItem)'>EXCLUIR</button>";
                    echo "</div>";
                    echo "<p id='preco-produto'>R$ $produtoPreco</p>";
                    echo "</div>";
                }



                ?>
            </div>

            <div id="barra"></div>

            <div id="resumo">
                <h2>Resumo da compra</h2>
                <hr />
                <div id="listagem">
                    <div>
                        <p>Produtos:</p>
                        <p>R$ <span id="somaProdutos"><?php echo $somaProdutos; ?></span></p>
                    </div>
                    <div>
                        <p>Desconto:</p>
                        <p id="desconto">0% | -R$ 0,00</p>
                    </div>
                </div>
                <hr />
                <div id="cupom">
                    <div>
                        <p>Inserir cupom:</p>
                        <input type="text" id="cupomDesconto" />
                    </div>
                    <button onclick="atualizarPreco(false)">Aplicar</button>
                </div>
                <hr />
                <div id="total">
                    <p>Total:</p>
                    <p id="precoFinal">R$ 0,00</p>
                </div>
                <button id="comprar" onclick="finalizarCompra()">Comprar</button>
            </div>
        </div>
    </main>

    <div id="carrinhoVazio" <?php if ($vazio === false) echo "style='display: none;'"; ?>>
        <h2>Seu carrinho está vazio.</h2>
        <p>Adicione um produto para fazer suas compras.</p>
    </div>

    <div>
        <div id="alertDescontoSucesso">
            <h2>Desconto aplicado com sucesso!</h2>
        </div>
        <div id="alertDescontoInvalido">
            <h2>Cupom de desconto inválido!</h2>
        </div>
        <div id="compraFinalizada">
            <h1>Compra realizada com sucesso!</h1>
            <h2>Obrigado por comprar conosco!</h2>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>