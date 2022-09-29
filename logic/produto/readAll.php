<?php

function showAllProduto(){
    require 'database/conexao.php';

    $select = "SELECT * FROM produto";
    $query = mysqli_query($conexao, $select);

    if(!$query){
        die('[ERRO]: '.mysqli_error($conexao));
    }
    $row = mysqli_fetch_assoc($query);
    return $row;
}

?>