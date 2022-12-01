<?php

session_start();

require '../database/conexao.php';

$nome = $_POST['nome'];
$tipoUsuario = $_POST['tipoUsuario'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];
$senha = $_POST['senha'];

$imagemNome = $_FILES['imagem']['tmp_name'];
$destino = '../img/usuario/'.$_FILES['imagem']['name'];

move_uploaded_file($imagemNome, $destino);

$insert = "INSERT INTO usuario (nome, tipoUsuario, endereco, email, telefone, rg, cpf, genero, imagem, senha) VALUES ('$nome', '$tipoUsuario', '$endereco', '$email', '$telefone', '$rg', '$cpf', '$genero', '$destino', '$senha')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

$_SESSION['nomeUsuario'] = $nome;
$_SESSION['tipoUsuario'] = $tipoUsuario;

header('Location: ../index.php');
exit();

?>