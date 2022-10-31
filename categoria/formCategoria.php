<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <?php require "../componentes/navbar.php"; ?>
    <?php require "rotaCategoriaForm.php"; ?>

    <form class="form-general" action="<?=$action?>" method="<?=$method?>" enctype="multipart/form-data">
        <div class="form-container form-produto">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $categoria['idCategoria'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $categoria['nome'] : "" ?>">
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