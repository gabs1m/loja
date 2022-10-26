<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$nome = $_POST['nome'];
$tipoUsuario = $_POST['tipoUsuario'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];

$imagemNome = $_FILES['imagem']['tmp_name'];
$destino = '../img/usuario/'.$_FILES['imagem']['name'];

move_uploaded_file($imagemNome, $destino);

$insert = "INSERT INTO usuario (nome, tipoUsuario, endereco, email, telefone, rg, cpf, genero, imagem) VALUES ('$nome', '$tipoUsuario', '$endereco', '$email', '$telefone', '$rg', '$cpf', '$genero', '$destino')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../index.php');
exit();

?>