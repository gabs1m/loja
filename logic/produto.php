<?php

function showFormProduto(){
        
}

function createProduto(){
    require '../database/conexao.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valorUnit = $_POST['valorUnit'];
    $lote = $_POST['lote'];

    $insert = "INSERT INTO produto (nome, descricao, valorUnit, lote) VALUES ('$nome', '$descricao', '$valorUnit', '$lote')";
    $query = mysqli_query($conexao, $insert);

    if(!$query){
        die('[ERRO]: '.mysqli_error($conexao));
    } else{
        header('Location: ../index.php');
        exit();
    }
}

function showAllProduto(){
    require '../database/conexao.php';

    $select = "SELECT * FROM produto";
    $query = mysqli_query($conexao, $select);

    if(!$query){
        die('[ERRO]: '.mysqli_error($conexao));
    } else{
        $row = mysqli_fetch_assoc($query);
        return $row;
    }
}

?>