<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'componentes/head.php'; ?>
</head>
<body>
    <?php require 'database/conexao.php'; ?>
    <?php require 'componentes/header.php'; ?>
    <?php require 'componentes/navbar.php'; ?>
    <section class="section-dash">
        <h2>Produtos registrados</h2>
        <table class="dashboard-table">
            <thead class="dashboard-thead">
                <tr class="dashboard-tr dashboard-tr-main">
                    <td class="dashboard-td dashboard-td-main">ID</td>
                    <td class="dashboard-td dashboard-td-main">Imagem</td>
                    <td class="dashboard-td dashboard-td-main">Nome</td>
                    <td class="dashboard-td dashboard-td-main">Descrição</td>
                    <td class="dashboard-td dashboard-td-main">Preço</td>
                    <td class="dashboard-td dashboard-td-main">Embalagem</td>
                    <td class="dashboard-td dashboard-td-main">Lote</td>
                    <td class="dashboard-td dashboard-td-main"></td>
                    <td class="dashboard-td dashboard-td-main"></td>
                </tr>
            </thead>
            <tbody class="dashboard-tbody">
            <?php
                require 'produto/readAllProduto.php';
                while($produto = mysqli_fetch_assoc($query)){
            ?>
                <tr class="dashboard-tr">
                    <td class="dashboard-td"><?=$produto['idProduto']?></td>
                    <td class="dashboard-td"><img src="<?=$produto['imagem']?>" alt="<?=$produto['nome']?>"></td>
                    <td class="dashboard-td"><?=$produto['nome']?></td>
                    <td class="dashboard-td"><?=$produto['descricao']?></td>
                    <td class="dashboard-td">R$<?=$produto['valorUnit']?></td>
                    <td class="dashboard-td"><?=$produto['embalagem']?></td>
                    <td class="dashboard-td"><?=$produto['lote']?></td>
                    <td class="dashboard-td"><a href="produto/formProduto.php?id=<?=$produto['idProduto']?>" class="button edit-button">Editar</a></td>
                    <td class="dashboard-td"><a href="produto/deleteProduto.php?id=<?=$produto['idProduto']?>" class="button delete-button">Excluir</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <div id="teste">
            <a href="produto/formProduto.php?id=<?= null ?>" class="button create-button">Cadastrar novo produto</a>
        </div>
    </section>
    <section class="section-dash">
        <h2>Kits registrados</h2>
        <table class="dashboard-table">
            <thead class="dashboard-thead">
                <tr class="dashboard-tr dashboard-tr-main">
                    <td class="dashboard-td dashboard-td-main">ID</td>
                    <td class="dashboard-td dashboard-td-main">Nome</td>
                    <td class="dashboard-td dashboard-td-main">Descrição</td>
                    <td class="dashboard-td dashboard-td-main">Preço</td>
                    <td class="dashboard-td dashboard-td-main"></td>
                    <td class="dashboard-td dashboard-td-main"></td>
                </tr>
            </thead>
            <tbody class="dashboard-tbody">
            <?php
                require 'kit/readAllKit.php';
                while($kit = mysqli_fetch_assoc($query)){
            ?>
                <tr class="dashboard-tr">
                    <td class="dashboard-td"><?=$kit['idKit']?></td>
                    <td class="dashboard-td"><?=$kit['nome']?></td>
                    <td class="dashboard-td"><?=$kit['descricao']?></td>
                    <td class="dashboard-td">R$<?=$kit['valorKit']?></td>
                    <td class="dashboard-td"><a href="kit/formKit.php?id=<?=$kit['idKit']?>" class="button edit-button">Editar</a></td>
                    <td class="dashboard-td"><a href="kit/deleteKit.php?id=<?=$kit['idKit']?>" class="button delete-button">Excluir</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <div id="teste">
            <a href="kit/formKit.php?id=<?= null ?>" class="button create-button">Cadastrar novo kit</a>
        </div>
    </section>
    <section class="section-dash">
        <h2>Usuários registrados</h2>
        <table class="dashboard-table">
            <thead class="dashboard-thead">
                <tr class="dashboard-tr dashboard-tr-main">
                    <td class="dashboard-td dashboard-td-main">ID</td>
                    <td class="dashboard-td dashboard-td-main">Nome</td>
                    <td class="dashboard-td dashboard-td-main">Tipo</td>
                    <td class="dashboard-td dashboard-td-main">Endereço</td>
                    <td class="dashboard-td dashboard-td-main">Email</td>
                    <td class="dashboard-td dashboard-td-main">Telefone</td>
                    <td class="dashboard-td dashboard-td-main">CPF</td>
                    <td class="dashboard-td dashboard-td-main">RG</td>
                    <td class="dashboard-td dashboard-td-main">Gênero</td>
                    <td class="dashboard-td dashboard-td-main">Imagem</td>
                    <td class="dashboard-td dashboard-td-main"></td>
                    <td class="dashboard-td dashboard-td-main"></td>
                </tr>
            </thead>
            <tbody class="dashboard-tbody">
            <?php
                require 'usuario/readAllUsuario.php';
                while($usuario = mysqli_fetch_assoc($query)){
            ?>
                <tr class="dashboard-tr">
                    <td class="dashboard-td"><?=$usuario['idUsuario']?></td>
                    <td class="dashboard-td"><?=$usuario['nome']?></td>
                    <td class="dashboard-td"><?=$usuario['tipoUsuario']?></td>
                    <td class="dashboard-td"><?=$usuario['endereco']?></td>
                    <td class="dashboard-td"><?=$usuario['email']?></td>
                    <td class="dashboard-td"><?=$usuario['telefone']?></td>
                    <td class="dashboard-td"><?=$usuario['cpf']?></td>
                    <td class="dashboard-td"><?=$usuario['rg']?></td>
                    <td class="dashboard-td"><?=$usuario['genero']?></td>
                    <td class="dashboard-td"><img src="<?=$usuario['imagem']?>" alt="<?=$usuario['nome']?>"></td>
                    <td class="dashboard-td"><a href="usuario/formRegistrar.php?id=<?=$usuario['idUsuario']?>" class="button edit-button">Editar</a></td>
                    <td class="dashboard-td"><a href="usuario/deleteUsuario.php?id=<?=$usuario['idUsuario']?>" class="button delete-button">Excluir</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </section>
    <?php
        require 'componentes/footer.php';
        require 'componentes/js-scripts.php';
    ?>
</body>