<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$tipoUsuario = $_GET['tipoUsuario'];
$endereco = $_GET['endereco'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$telefone = $_GET['telefone'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg'];
$genero = $_GET['genero'];

$update = "UPDATE usuario SET nome = '$nome', tipoUsuario = '$tipoUsuario', endereco = '$endereco', email = '$email', senha = '$senha', telefone = '$telefone', cpf = '$cpf', rg = '$rg', genero = '$genero' WHERE idUsuario = '$id'";
$query = mysqli_query($conexao, $update);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../index.php');
exit();

?>