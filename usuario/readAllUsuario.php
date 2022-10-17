<meta charset="UTF-8">

<?php

require 'database/conexao.php';

$select = "SELECT * FROM usuario";
$query = mysqli_query($conexao, $select);

if(!$query){
    die('[ERRO]: '.mysqli_error($conexao));
}

?>