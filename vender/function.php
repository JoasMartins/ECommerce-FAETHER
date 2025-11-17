<?php include("../config-database.php"); ?>

<?php

// PEGANDO DADOS DO FORMULARIO
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'] ?? null;

// PASTAS PARA ARMAZENAR IMAGENS
$uploadsDir = __DIR__ . '/../uploads/produtos';

$imagem_db = "/imagens/produto-imagem-padrao.png";
if (isset($_FILES['imagem'])) {  // VERIFICAR SE IMAGEM FOI SETADA
    $origName = $_FILES['imagem']['name'];
    $ext = pathinfo($origName, PATHINFO_EXTENSION); // PEGAR EXTENSÃO DA IMAGEM
    $newName = uniqid('img_') . ($ext ? '.' . $ext : '');  // GERAR NOME UNICO
    $pasta = $uploadsDir . '/' . $newName;

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta)) { // ADICIONAR A IMAGEM NO ARMAZENAMENTO
        $imagem_db = '/uploads/produtos/' . $newName; // CAMINHO SALVO NO PRODUTO
    }
}

// SALVANDO PRODUTO NO BANCO DE DADOS
$sqlInsert = "INSERT INTO `produtos` (`id`, `produtoNome`, `produtoDescricao`, `produtoPreco`, `produtoImagem`) VALUES (NULL, '$titulo', '$descricao', '$preco', '$imagem_db');";
$resultado = $MySQLi->query($sqlInsert) or trigger_error($MySQLi->error, E_USER_ERROR);

// LOG DE RESULTADO
if ($resultado) {
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false]);
}
