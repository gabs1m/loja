<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valorKit = $_POST['valorKit'];

$insert = "INSERT INTO kit (nome, descricao, valorKit) VALUES ('$nome', '$descricao', '$valorKit')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>