<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <form class="form-general" action="login.php" method="post" enctype="multipart/form-data">
        <div class="form-container">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha">
            </div>
            <button>Confirmar</button>
        </div>
    </form>
    <?php require "../componentes/footer.php"; ?>
    <?php require "../componentes/js-scripts.php"; ?>
</body>
</html>