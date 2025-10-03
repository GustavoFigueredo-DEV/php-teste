<?php include "../app/data/produtos.php";
$id = $_GET["id"] ?? null;

$produtoSelecionado = null;
for ($i = 0; $i < count(value: $produtos); $i++) {
    if ($produtos[$i]->id == $id) {
        $produtoSelecionado = $produtos[$i];
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
    <title>YStore | <?= $produtoSelecionado->nome ?
                        $produtoSelecionado->nome : "produto não encontrado" ?>
    </title>
</head>

<body>
    <?php
    include __DIR__ . '/../app/components/header.php';
    ?>
    <?php if ($produtoSelecionado): ?>
        <div class="cardContainer">
            <div class="produtoCard">
                <div class="produtoImg">
                    <img src="<?= $produtoSelecionado->imagem ?>" alt="">
                </div>
                <div class="produtoInfoContainer">
                    <div class="nomeCategoria">
                    <p class="nomeText"><?= $produtoSelecionado->nome ?></p>
                    <p><?= $produtoSelecionado->categoria ?></p>
                    </div>
                    <p class="descriptionText"><?= $produtoSelecionado->descricao ?></p>
                   
                    <p>Disponível: <?= $produtoSelecionado->estoque ?></p>
                    
                    <p><?= $produtoSelecionado->marca ?></p>
                     <p class="priceText">R$ <?= $produtoSelecionado->preco ?>,00</p>

                     <div>
                    <button class="buyButton">
                        Comprar
                    </button>
                </div>
                </div>
                
            </div>
        </div>
    <?php else: ?>
        <h1>Produto não encontrado</h1>
    <?php endif ?>
    <?php
    include __DIR__ . '/../app/components/footer.php';
    ?>
</body>


</html>