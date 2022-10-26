<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];

$delete = "DELETE FROM produto WHERE idProduto = '$id'";
$query = mysqli_query($conexao, $delete);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>