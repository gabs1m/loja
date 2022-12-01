<?php

session_start();

require '../database/conexao.php';

$nome = $_POST['nome'];

$insert = "INSERT INTO categoria (nome) VALUES ('$nome')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>