<meta charset="UTF-8">

<?php

require "../database/conexao.php";

$id = $_GET['id'];

$select = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

$usuario = mysqli_fetch_assoc($query);

?>