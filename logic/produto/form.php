<?php

function showFormProduto($id = null){
    $id = $_GET['id'];

    require 'database/conexao.php';

    if(isset($id)){
        $select = "SELECT * FROM produto WHERE idProduto = '$id'";
        $query = mysqli_query($conexao, $select);
        if(!$query){
            die('[ERRO]: '.mysqli_error(conexao));
        }
        $row = mysqli_fetch_assoc($query);
    }

    $method = (isset($id)) ? "get" : "post";
    $action = (isset($id)) ? "../../../logic/produto/update.php" : "../../../logic/produto/create.php";

    $return = ['id' => $id, 'action' => $action, 'method' => $method, 'row' => $row];

    return $return;
}

header('Location: ../../../views/admin/produto/formProduto.php');
exit();

?>