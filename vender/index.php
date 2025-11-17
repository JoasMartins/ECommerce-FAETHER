<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar produto a venda</title>
</head>

<body>

    <?php include("../componentes/header.php");?>

    <main>
        <div>
            <h1>VENDER MEU PRODUTO</h1>
        </div>

        <hr />

        <form>
            <div id="texts">
                <div class="form-group" id="form-titulo">
                    <p>Nome do produto</p>
                    <input type="text" id="titulo" />
                </div>

                <div class="form-group" id="form-descricao">
                    <p>Descrição do produto</p>
                    <textarea type="text" id="descricao"></textarea>
                </div>

                <div class="form-group" id="form-preco">
                    <p>Preço</p>
                    <input type="number" id="preco" />
                </div>
            </div>

            <div id="barra"></div>

            <div id="options">
                <div class="form-group" id="form-imagem">
                    <p>Imagem (opcional)</p>
                    <label for="imagem">Adicionar imagem</label>
                    <input type="file" id="imagem" accept="image/png, image/jpeg, image/jpg" onchange="imagemAdd()" />
                    <img src="../imagens/carregar.png" id="imagem-preview" />
                </div>
            </div>



            
        </form>
        <button onclick="adicionarProduto()">Adicionar produto</button>
    </main>

    <footer>

    </footer>

    <div id="screensucesso">
        <h1>Produto adicionando a venda com sucesso!</h1>
        <p>Redirencionando para vitrine de produtos...</p>
    </div>

    <script type="text/javascript" src="script.js">

    </script>

</body>

</html>