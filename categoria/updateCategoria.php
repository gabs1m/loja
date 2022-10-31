<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];

$update = "UPDATE categoria SET nome = '$nome' WHERE idCategoria = '$id'";
$query = mysqli_query($conexao, $update);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>