<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'componentes/head.php'; ?>
</head>
<body>
    <?php require 'database/conexao.php'; ?>
    <?php require 'componentes/header.php'; ?>
    <?php require 'componentes/navbar.php'; ?>
    <section class="produtos-index">
        <div class="produtos-container">
    <?php
        require 'produto/readAllProduto.php';
        while($row = mysqli_fetch_assoc($query)){
    ?>
            <div class="produto-geral">
                <h2><?=$row['nome']?></h2>
                <p><?=$row['valorUnit']?></p>
                <ul>
                    <li><a href="produto/viewProduto.php?id=<?=$row['idProduto']?>">Exibir</a></li>
                    <li><a href="produto/formProduto.php?id=<?=$row['idProduto']?>">Editar</a></li>
                    <li><a href="produto/deleteProduto.php?id=<?=$row['idProduto']?>">Excluir</a></li>
                </ul>
            </div>
    <?php
        }
    ?>
        </div>
    </section>
    <section id="teste">
        <h2><a href="produto/formProduto.php?id=<?= null ?>">Cadastrar novo produto</a></h2>
    </section>
    <?php
        require 'componentes/footer.php';
        require 'componentes/js-scripts.php';
    ?>

</body>
</html>