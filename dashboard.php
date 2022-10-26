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
    <section class="produto-dash">
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
                </tr>
            </thead>
            <tbody class="dashboard-tbody">
            <?php
                require 'produto/readAllProduto.php';
                while($row = mysqli_fetch_assoc($query)){
            ?>
                <tr class="dashboard-tr">
                    <td class="dashboard-td"><?=$row['idProduto']?></td>
                    <td class="dashboard-td"><img src="<?=$row['imagem']?>" alt="<?=$row['nome']?>"></td>
                    <td class="dashboard-td"><?=$row['nome']?></td>
                    <td class="dashboard-td"><?=$row['descricao']?></td>
                    <td class="dashboard-td">R$<?=$row['valorUnit']?></td>
                    <td class="dashboard-td"><?=$row['embalagem']?></td>
                    <td class="dashboard-td"><?=$row['lote']?></td>
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