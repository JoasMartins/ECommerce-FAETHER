<?php
// para retornar JSON, se não da erro
header('Content-Type: application/json');

function adicionarCarrinho($id)
{

    try {

        $pdo = new PDO("mysql:host=localhost;dbname=produtos;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
        $query->execute([$id]);

        $linha = $query->fetch(PDO::FETCH_ASSOC);

        if (!$linha) {
            echo json_encode(["erro" => "não encontrado"]);
            exit;
        }

        //Copiando para o carrinho
        $insert = $pdo->prepare("
            INSERT INTO carrinho (idItem)
            VALUES (?)
        ");

        $insert->execute([
            $linha['id']
        ]);

        echo json_encode(["status" => "ok", "mensagem" => "copiado para o carrinho"]);
        exit;
    } catch (Exception $e) {
        echo json_encode(["erro" => $e->getMessage()]);
        exit;
    }
}

// PEGANDO O ID VIA POST DA FUNÇÃO JAVASCRIPT
if (isset($_POST['id'])) {
    adicionarCarrinho($_POST['id']);
} else {
    echo json_encode(["erro" => "Nenhum ID recebido"]);
    exit;
}
