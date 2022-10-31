<meta charset="UTF-8">

<?php

$id = $_GET['id'];
if($_GET['id'] == null){
    $id = null;
}

require '../database/conexao.php';

$select = "SELECT * FROM kit WHERE idKit = '$id'";
$query = mysqli_query($conexao, $select);
if(!$query){
    die('[ERRO]: '.mysqli_error(conexao));
}
$kit = mysqli_fetch_assoc($query);

$method = (isset($id)) ? "get" : "post";
$action = (isset($id)) ? "updateKit.php" : "createKit.php";

?>