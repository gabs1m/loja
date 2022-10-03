<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'views/componentes/head.php'; ?>
</head>
<body>
    <?php
        require 'database/conexao.php';
        require 'views/componentes/header.php';
        require 'views/componentes/navbar.php';
    ?>
    <section class="produtos-index">
        <div class="produtos-container">
    <?php
        require 'logic/produto/readAll.php';
        $query = showAllProduto();
        while($row = mysqli_fetch_assoc($query)){
    ?>
            <div class="produto-geral">
                <h2><?=$row['nome']?></h2>
                <p><?=$row['valorUnit']?></p>
                <ul>
                    <li><a href="logic/produto/.php?id=<?=$row['idProduto']?> ">Exibir</a></li>
                    <li><a href="logic/produto/form.php?id=<?=$row['idProduto']?> ">Editar</a></li>
                </ul>
            </div>
    <?php
        }
    ?>
        </div>
    </section>
    <section id="teste">
        <h2><a href="view/">Cadastrar novo produto</a></h2>
    </section>
    <?php
        require 'views/componentes/footer.php';
        require 'views/componentes/js-scripts.php';
    ?>

</body>
</html>