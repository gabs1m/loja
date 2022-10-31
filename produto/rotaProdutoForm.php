<meta charset="UTF-8">

<?php

$id = $_GET['id'];
if($_GET['id'] == null){
    $id = null;
}

require '../database/conexao.php';

$select = "SELECT * FROM produto WHERE idProduto = '$id'";
$query = mysqli_query($conexao, $select);
if(!$query){
    die('[ERRO]: '.mysqli_error(conexao));
}
$produto = mysqli_fetch_assoc($query);

$method = (isset($id)) ? "get" : "post";
$action = (isset($id)) ? "updateProduto.php" : "createProduto.php";

?>