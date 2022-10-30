<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require '../componentes/head.php'; ?>
</head>
<body>
    <?php require '../database/conexao.php'; ?>
    <?php require '../componentes/header.php'; ?>
    <?php require '../componentes/navbar.php'; ?>
    <?php require 'showKit.php'; ?>
    <section class="kit-solo-container">
        <div class="kit-view">
            <h2><?=$row['nome']?></h2>
            <p><?=$row['descricao']?></p>
            <p>R$<?=$row['valorKit']?></p>
        </div>
    </section>
    <?php
        require '../componentes/footer.php';
        require '../componentes/js-scripts.php';
    ?>

</body>
</html>