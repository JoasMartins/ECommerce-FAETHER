<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>Faether Store</title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="scriptHome.js"></script>
</header>

<body>

    <?php include("../componentes/header.php"); ?>

    <div id="main">

        <!--Produtos a venda-->
        <div class="produtosConteiner">
            <?php

            // Conectar
            $pdo = new PDO('mysql:host=localhost;dbname=produtos;charset=utf8', 'root', '');

            // Consulta banco de dados
            $sql = $pdo->query("SELECT id, produtoNome, produtoPreco, produtoDescricao, produtoImagem FROM produtos");

            // Exibir produtos
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                $imagem = $row['produtoImagem'];

                echo '<div class="itens">';
                echo "<img src='..$imagem' alt='Imagem do produto'>";
                echo "<p><span>Nome:</span> " . htmlspecialchars($row['produtoNome']) . "</p>";
                echo "<p><span>Preço:</span> R$ " . htmlspecialchars($row['produtoPreco']) . "</p>";
                echo "<p><span>Descrição:</span> " . htmlspecialchars($row['produtoDescricao']) . "</p>";
                echo '<button class="btn-default" onclick="adicionarCarrinho(\'' . htmlspecialchars($row['id']) . '\')">
        <i class="fa-solid fa-basket-shopping"></i>
      </button>';
                echo "</div>";
            }


            ?>
        </div>
</body>
</div>
<footer>
    A melhor loja de pesca do Brasil!
</footer>

</html>