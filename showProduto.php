<?php

require "conexao.php";

$id = $_GET['id'];

$select = "SELECT * FROM produto WHERE idProduto = '$id'";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

?>