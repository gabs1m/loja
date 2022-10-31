<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <?php require "../componentes/navbar.php"; ?>
    <?php require "rotaProdutoForm.php"; ?>

    <form class="form-general" action="<?=$action?>" method="<?=$method?>" enctype="multipart/form-data">
        <div class="form-container form-produto">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $produto['idProduto'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $produto['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" cols="30" rows="10"><?=(isset($id)) ? $produto['descricao'] : "" ?></textarea>
            </div>
            <div class="form-group">
                <label for="valorUnit">Valor Unitário:</label>
                <input type="number" name="valorUnit" step=".01" value="<?=(isset($id)) ? $produto['valorUnit'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="lote">Lote:</label>
                <input type="text" name="lote" value="<?=(isset($id)) ? $produto['lote'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="embalagem">Embalagem:</label>
                <input type="text" name="embalagem" value="<?=(isset($id)) ? $produto['lote'] : "" ?>">
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