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
            <a href="produto/viewProduto.php?id=<?=$row['idProduto']?>">
                <div class="produto-geral">
                    <img src="<?=$row['imagem']?>" alt="<?=$row['nome']?>">
                    <h2><?=$row['nome']?></h2>
                    <p><?=$row['valorUnit']?></p>
                </div>
            </a>
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