<meta charset="UTF-8">

<?php

require '../database/conexao.php';

$nome = $_POST['nome'];
$tipoUsuario = $_POST['tipoUsuario'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$imagemNome = $_FILES['imagem']['tmp_name'];
$destino = '../img/'.$_FILES['imagem']['name'];

move_uploaded_file($imagemNome, $destino);

$insert = "INSERT INTO produto (nome, tipoUsuario, endereco, email, telefone, imagem) VALUES ('$nome', '$tipoUsuario', '$endereco', '$email', '$telefone', '$destino')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../index.php');
exit();

?>