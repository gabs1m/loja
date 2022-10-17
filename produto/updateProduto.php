<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$valorUnit = $_GET['valorUnit'];
$lote = $_GET['lote'];

$update = "UPDATE produto SET nome = '$nome', descricao = '$descricao', valorUnit = '$valorUnit', lote = '$lote' WHERE idProduto = '$id'";
$query = mysqli_query($conexao, $update);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../index.php');
exit();

?>