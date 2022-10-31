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
        if(empty($_GET)){
            while($produto = mysqli_fetch_assoc($query)){
    ?>
            <a href="produto/viewProduto.php?id=<?=$produto['idProduto']?>">
                <div class="produto-geral">
                    <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
                    <h2><?=$produto['nome']?></h2>
                    <p><?=$produto['valorUnit']?></p>
                </div>
            </a>
    <?php
            }
        } else{
            $busca = $_GET['busca'];

            $selectW = "SELECT * FROM produto WHERE nome LIKE '%$busca%'";
            $query = mysqli_query($conexao, $selectW);

            if(!$query){
                die("[ERRO]: ".mysqli_error($conexao));
            }

            while($produto = mysqli_fetch_assoc($query)){
    ?>
            <a href="produto/viewProduto.php?id=<?=$produto['idProduto']?>">
                <div class="produto-geral">
                    <img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>">
                    <h2><?=$produto['nome']?></h2>
                    <p><?=$produto['valorUnit']?></p>
                </div>
            </a>
    <?php
            }
        }
    ?>
        </div>
    </section>
    <?php
        require 'componentes/footer.php';
        require 'componentes/js-scripts.php';
    ?>

</body>
</html>