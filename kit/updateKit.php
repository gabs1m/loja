<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$valorKit = $_GET['valorKit'];

$update = "UPDATE kit SET nome = '$nome', descricao = '$descricao', valorKit = '$valorKit' WHERE idKit = '$id'";
$query = mysqli_query($conexao, $update);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>