<?php

/*$conexao = mysqli_connect('kgsports.epizy.com', 'epiz_32670962', 's9JERCY23Ivi1mh', 'loja');*/
$conexao = mysqli_connect('localhost', 'root', '', 'loja');
if(!$conexao){
    die('[ERRO]: '.mysqli_connect_error());
}

?>