<?php

require 'database/conexao.php';

$select = "SELECT * FROM categoria";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

?>