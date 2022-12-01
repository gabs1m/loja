<?php

require "../database/conexao.php";

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$id = $_POST['id'];

$selectU = "SELECT * FROM usuario WHERE email = '$email'";
$query = mysqli_query($conexao, $selectU);

if(!$query){
    die("[ERRO]: ".mysqli_error($conexao));
}

$row = mysqli_fetch_assoc($query);

if($senha != $row['senha']){
    header("Location: formLogin.php");
} else{
    $_SESSION['nomeUsuario'] = $row['nome'];
    $_SESSION['tipoUsuario'] = $row['tipoUsuario'];
    header("Location: ../index.php");
}

?>