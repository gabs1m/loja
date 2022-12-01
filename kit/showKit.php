<?php

require "../database/conexao.php";

$id = $_GET['id'];

$select = "SELECT * FROM kit WHERE idKit = '$id'";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

$kit = mysqli_fetch_assoc($query);

?>