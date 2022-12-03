<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require '../componentes/head.php'; ?>
</head>
<body>
    <?php require '../database/conexao.php'; ?>
    <?php require '../componentes/header.php'; ?>
    <?php require '../componentes/navbar2.php'; ?>
    <?php require 'showProduto.php'; ?>
    <section class="produto-solo-container">
        <div class="produto-view">
            <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
            <h2><?=$produto['nome']?></h2>
            <p><?=$produto['descricao']?></p>
            <p>R$<?=$produto['valorUnit']?></p>
            <p>Lote <?=$produto['lote']?></p>
            <p>Embalagem: <?=$produto['embalagem']?></p>
        </div>
    </section>
    <?php
        require '../componentes/footer.php';
        require '../componentes/js-scripts.php';
    ?>

</body>
</html>