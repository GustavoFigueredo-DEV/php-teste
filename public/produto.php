<?php
// Caminho correto e seguro:
include __DIR__ . '/../app/data/produtos.php';

$id = $_GET["id"] ?? null;

// Garante que $produtos é um array
if (!isset($produtos) || !is_array($produtos)) {
    $produtos = [];
}

$produtoSelecionado = null;
foreach ($produtos as $produto) {
    if ($produto->id == $id) {
        $produtoSelecionado = $produto;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/produto.css">
    <title>
        YStore | <?= $produtoSelecionado ? $produtoSelecionado->nome : "Produto não encontrado" ?>
    </title>
</head>

<body>
    <?php include __DIR__ . '/../app/components/header.php'; ?>

    <?php if ($produtoSelecionado): ?>
        <div class="container">
        <div class="produtoCard">
            <div class="imageContainer">
                <img src="<?= $produtoSelecionado -> imagem?>" alt="">
            </div>

            <div class="produtoInfo">
                <div class="categoriaContainer">
                    <img src="./assets/imgs/categoriaIcon.png" alt="">
                    <p><?= $produtoSelecionado -> categoria ?></p>
                </div>

                <h1 class="produtoNome"><?= $produtoSelecionado -> nome?></h1>
                <p class="produtoMarca">Marca: <?= $produtoSelecionado -> marca?></p>
                <p class="produtoDescricao"><?= $produtoSelecionado -> descricao?></p>

                <div class="produtoEstoque">
                    <p><?= $produtoSelecionado -> estoque?> unidades em estoque</p>
                </div>

                <div class="linha">
                    <p class="produtoPreco">Preço</p>
                    <h1>R$ <?= $produtoSelecionado -> preco?>,00</h1>
                </div>

                <button class="comprarBtn">Comprar</button>
            </div>
        </div>
        </div>
    <?php else: ?>
        <h1>Produto não encontrado</h1>
    <?php endif ?>

    <?php include __DIR__ . '/../app/components/footer.php'; ?>
</body>

</html>