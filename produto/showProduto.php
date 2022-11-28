<?php

session_start();

require "../database/conexao.php";

$id = $_GET['id'];

$select = "SELECT * FROM produto WHERE idProduto = '$id'";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

$produto = mysqli_fetch_assoc($query);

?>