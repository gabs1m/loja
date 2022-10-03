<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'head.php'; ?>
</head>
<body>
    <?php require 'conexao.php'; ?>
    <?php require 'header.php'; ?>
    <?php require 'navbar.php'; ?>
    <section class="produtos-index">
        <div class="produtos-container">
    <?php
        require 'readAllProduto.php';
        while($row = mysqli_fetch_assoc($query)){
    ?>
            <div class="produto-geral">
                <h2><?=$row['nome']?></h2>
                <p><?=$row['valorUnit']?></p>
                <ul>
                    <li><a href="viewProduto.php?id=<?=$row['idProduto']?>">Exibir</a></li>
                    <li><a href="formProduto.php?id=<?=$row['idProduto']?>">Editar</a></li>
                    <li><a href="deleteProduto.php?id=<?=$row['idProduto']?>">Excluir</a></li>
                </ul>
            </div>
    <?php
        }
    ?>
        </div>
    </section>
    <section id="teste">
        <h2><a href="formProduto.php?id=<?= null ?>">Cadastrar novo produto</a></h2>
    </section>
    <?php
        require 'footer.php';
        require 'js-scripts.php';
    ?>

</body>
</html>