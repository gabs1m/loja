<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "views/componentes/head.php"; ?>
</head>
<body>
    <?php
        require "database/conexao.php";
        require "views/componentes/header.php";
        require "views/componentes/navbar.php";

        $id = $return['id'];
        $action = $return['action'];
        $method = $return['method'];
        $row = $return['row'];
    ?>
    <form action="<?=$action?>" method="<?=$method?>">
        <input type="text" name="nome" value="<?=$row['nome']?>">
        <textarea name="descricao" cols="30" rows="10"><?=$row['descricao']?></textarea>
        <input type="number" name="valorUnit" step=".01" value="<?=$row['valorUnit']?>">
        <input type="text" name="lote" value="<?=$row['lote']?>">
        <button>Confirmar</button>
    </form>
    <?php
        require "views/componentes/footer.php";
        require "views/componentes/js-scripts.php";
    ?>
</body>
</html>