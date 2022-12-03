<?php

session_start();

require '../database/conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valorUnit = $_POST['valorUnit'];
$lote = $_POST['lote'];
$embalagem = $_POST['embalagem'];
$categoria = $_POST['categoria'];

$imagemNome = $_FILES['imagem']['tmp_name'];
$destino = '../img/produto/'.$_FILES['imagem']['name'];

move_uploaded_file($imagemNome, $destino);

$insert = "INSERT INTO produto (nome, descricao, valorUnit, lote, embalagem, idCategoria,  imagem) VALUES ('$nome', '$descricao', '$valorUnit', '$lote', '$embalagem', '$categoria', '$destino')";
$query = mysqli_query($conexao, $insert);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

header('Location: ../dashboard.php');
exit();

?>