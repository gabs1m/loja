<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <?php require "../componentes/navbar.php"; ?>
    <?php require "rotaUsuarioForm.php"; ?>

    <form class="form-produto" action="<?=$action?>" method="<?=$method?>">
        <div class="form-container">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $row['idUsuario'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $row['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="tipoUsuario">Tipo do usuário:</label>
                <input type="radio" name="tipoUsuario" value="admin" <?=(isset($id)) and $row['tipoUsuario'] == "admin" ? "checked" : "" ?>>
                <input type="radio" name="tipoUsuario" value="cliente" <?=(isset($id)) and $row['tipoUsuario'] == "cliente" ? "checked" : "" ?>>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" value="<?=(isset($id)) ? $row['endereco'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" value="<?=(isset($id)) ? $row['email'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" maxlength="11" value="<?=(isset($id)) ? $row['telefone'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" name="rg" maxlength="9" minlength="8" value="<?=(isset($id)) ? $row['rg'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" minlength="11" value="<?=(isset($id)) ? $row['cpf'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="radio" name="genero" value="Feminino" <?=(isset($id)) and $row['genero'] == "Feminino" ? "checked" : "" ?>>
                <input type="radio" name="genero" value="Masculino" <?=(isset($id)) and $row['genero'] == "Masculino" ? "checked" : "" ?>>
                <input type="radio" name="genero" value="Prefiro não responder" <?=(isset($id)) and $row['genero'] == "Prefiro não responder" ? "checked" : "" ?>>
            </div>
            <div>
                <label for="imagem" id="label-imagem">Inserir foto</label>
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