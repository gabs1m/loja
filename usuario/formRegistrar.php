<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "rotaUsuarioForm.php"; ?>

    <form class="form-general" action="<?=$action?>" method="<?=$method?>" enctype="multipart/form-data">
        <div class="form-container">
            <input type="hidden" name="id" value="<?=(isset($id)) ? $row['idUsuario'] : "" ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=(isset($id)) ? $row['nome'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="tipoUsuario">Tipo do usuário:</label>
                <div class="form-radio">
                    <input type="radio" name="tipoUsuario" value="admin" <?=(isset($id)) and $row['tipoUsuario'] == "admin" ? "checked" : "" ?>>
                    <label for="tipoUsuario">Admin</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="tipoUsuario" value="cliente" <?=(isset($id)) and $row['tipoUsuario'] == "cliente" ? "checked" : "" ?>>
                    <label for="tipoUsuario">Cliente</label>
                </div>
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
                <input type="text" name="cpf" maxlength="11" minlength="11" value="<?=(isset($id)) ? $row['cpf'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <div class="form-radio">
                    <input type="radio" name="genero" value="Feminino" <?=(isset($id)) and $row['genero'] == "Feminino" ? "checked" : "" ?>>
                    <label for="genero">Feminino</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="genero" value="Masculino" <?=(isset($id)) and $row['genero'] == "Masculino" ? "checked" : "" ?>>
                    <label for="genero">Masculino</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="genero" value="Não-binário" <?=(isset($id)) and $row['genero'] == "Não-binário" ? "checked" : "" ?>>
                    <label for="genero">Não-binário</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="genero" value="Prefiro não responder" <?=(isset($id)) and $row['genero'] == "Prefiro não responder" ? "checked" : "" ?>>
                    <label for="genero">Prefiro não responder</label>
                </div>
            </div>
            <div>
                <label for="imagem" id="label-imagem">Inserir foto</label>
                <input type="file" name="imagem" id="imagem">
            </div>
            <button>Confirmar</button>
        </div>
    </form>
    <?php
        require "../componentes/js-scripts.php";
    ?>
</body>
</html>