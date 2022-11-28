<?php

session_start();

require 'database/conexao.php';

$select = "SELECT * FROM kit";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

?>