<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <?php require "../componentes/navbar.php"; ?>
    <?php require "rotaKitForm.php"; ?>

    <form class="form-Kit" action="<?=$action?>" method="<?=$method?>">
        <div class="form-container">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $kit['idKit'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $kit['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" cols="30" rows="10"><?=(isset($id)) ? $kit['descricao'] : "" ?></textarea>
            </div>
            <div class="form-group">
                <label for="valorUnit">Valor do Kit:</label>
                <input type="number" name="valorKit" step=".01" value="<?=(isset($id)) ? $kit['valorKit'] : "" ?>">
            </div>
            <button>Confirmar</button>
        </div>
    </form>
    <?php
        require "../componentes/footer.php";
        require "../componentes/js-scripts.php";
    ?>
</body>
</html>