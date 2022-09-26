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
    <?php
        require 'logic/produto.php';
    ?>
    <?php
        require 'views/componentes/footer.php';
        require 'views/componentes/js-scripts.php';
    ?>
</body>
</html>