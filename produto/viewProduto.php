<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require '../componentes/head.php'; ?>
</head>
<body>
    <?php require '../database/conexao.php'; ?>
    <?php require '../componentes/header.php'; ?>
    <?php require '../componentes/navbar.php'; ?>
    <?php require 'showProduto.php'; ?>
    <section class="produto-solo-container">
        <div class="produto-view">
            <img src="<?=$row['imagem']?>" alt="<?=$row['nome']?>">
            <h2><?=$row['nome']?></h2>
            <p><?=$row['descricao']?></p>
            <p>R$<?=$row['valorUnit']?></p>
            <p>Lote <?=$row['lote']?></p>
            <p>Embalagem: <?=$row['embalagem']?></p>
        </div>
    </section>
    <?php
        require '../componentes/footer.php';
        require '../componentes/js-scripts.php';
    ?>

</body>
</html>