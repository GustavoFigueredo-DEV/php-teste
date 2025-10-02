<?php include "../app/data/produtos.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "../app/components/header.php"; ?>
    <div class="produtosContainer">
        <?php foreach($produtos as $produto) : ?>
            <div class="produto">
                <img src="<?= $produto->imagem?>" alt="">
                <h2><?= $produto->nome ?></h2>
                <p><?= $produto->estoque ?></p>
                <p><?= $produto->marca ?></p>
                <a href="">Ver mais</a>
            </div>
            <?php endforeach; ?>
            </div>
</body>

</html>