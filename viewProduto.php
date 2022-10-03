<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'head.php'; ?>
</head>
<body>
    <?php require 'conexao.php'; ?>
    <?php require 'header.php'; ?>
    <?php require 'navbar.php'; ?>
    <?php require 'showProduto.php'; ?>
    <section class="produto-solo-container">
        <div class="produto-view">
            <h2><?=$row['nome']?></h2>
            <p><?=$row['descricao']?></p>
            <p>R$<?=$row['valorUnit']?></p>
            <p>Lote <?=$row['lote']?></p>
        </div>
    </section>
    <?php
        require 'footer.php';
        require 'js-scripts.php';
    ?>

</body>
</html>