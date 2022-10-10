<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "head.php"; ?>
</head>
<body>
    <?php require "conexao.php"; ?>
    <?php require "header.php"; ?>
    <?php require "navbar.php"; ?>
    <?php require "rotaProdutoForm.php"; ?>

    <form class="form-produto" action="<?=$action?>" method="<?=$method?>">
        <div class="form-container">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $row['idProduto'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $row['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" cols="30" rows="10"><?=(isset($id)) ? $row['descricao'] : "" ?></textarea>
            </div>
            <div class="form-group">
                <label for="valorUnit">Valor Unitário:</label>
                <input type="number" name="valorUnit" step=".01" value="<?=(isset($id)) ? $row['valorUnit'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="lote">Lote:</label>
                <input type="text" name="lote" value="<?=(isset($id)) ? $row['lote'] : "" ?>">
            </div>
            <button>Confirmar</button>
        </div>
    </form>
    <?php
        require "footer.php";
        require "js-scripts.php";
    ?>
</body>
</html>