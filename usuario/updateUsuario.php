<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$tipoUsuario = $_GET['tipoUsuario'];
$endereco = $_GET['endereco'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$rg = $_GET['rg'];
$cpf = $_GET['cpf'];
$genero = $_GET['genero'];

$imagemNome = $_FILES['imagem']['tmp_name'];
$destino = '../img/usuario/'.$_FILES['imagem']['name'];

move_uploaded_file($imagemNome, $destino);

$update = "UPDATE usuario SET nome = '$nome', tipoUsuario = '$tipoUsuario', endereco = '$endereco', email = '$email', telefone = '$telefone', rg = '$rg', cpf = '$cpf', genero = '$genero' WHERE idUsuario = '$id'";
$query = mysqli_query($conexao, $update);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>