<?php

function createProduto(){
    require '../../database/conexao.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valorUnit = $_POST['valorUnit'];
    $lote = $_POST['lote'];

    $insert = "INSERT INTO produto (nome, descricao, valorUnit, lote) VALUES ('$nome', '$descricao', '$valorUnit', '$lote')";
    $query = mysqli_query($conexao, $insert);

    if(!$query){
        die('[ERRO]: '.mysqli_error($conexao));
    }
    header('Location: ../index.php');
    exit();
}

?>