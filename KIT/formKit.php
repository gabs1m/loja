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
            <input type="hidden" name="id" value="<?=(isset($id)) ? $row['idKit'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $row['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" cols="30" rows="10"><?=(isset($id)) ? $row['descricao'] : "" ?></textarea>
            </div>
            <div class="form-group">
                <label for="valorUnit">Valor do Kit:</label>
                <input type="number" name="valorKit" step=".01" value="<?=(isset($id)) ? $row['valorKit'] : "" ?>">
            </div>
            <div>
                <label for="imagem" id="label-imagem">Inserir imagem</label>
                <input type="file" name="imagem" id="imagem">
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