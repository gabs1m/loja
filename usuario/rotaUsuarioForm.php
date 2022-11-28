<?php

session_start();

$id = $_GET['id'];
if($_GET['id'] == null){
    $id = null;
}

require '../database/conexao.php';

$select = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$query = mysqli_query($conexao, $select);
if(!$query){
    die('[ERRO]: '.mysqli_error(conexao));
}
$usuario = mysqli_fetch_assoc($query);

$method = (isset($id)) ? "get" : "post";
$action = (isset($id)) ? "updateUsuario.php" : "registrar.php";

?>