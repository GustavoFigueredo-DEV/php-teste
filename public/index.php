<?php 
// Inclui o arquivo de produtos usando caminho absoluto baseado no diretório atual
include __DIR__ . '/../app/data/produtos.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/produto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include __DIR__ . '/../app/components/header.php';
    ?>

    <div class="produtosContainer">
        <?php foreach($produtos as $produto) : ?>
            <div class="produto">
                <img src="<?= $produto->imagem ?>" alt="">
                <div class="produtoInfo">
                <h2><?= $produto->nome ?></h2>
                <h4><?= $produto->descricao ?></h4>
                <p>Estoque: <?= $produto->estoque ?></p>
                <p>Marca: <?= $produto->marca ?></p>
                </div>
                <a href="./produto.php?id=<?= $produto -> id?>">Ver mais</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?php
include __DIR__ . '/../app/components/footer.php';
?>

</html>
