<nav class="navbar">
    <?php
        include '../database/conexao.php';

        $select = "SELECT * FROM categoria";
        $query = mysqli_query($conexao, $select);
        
        if(!$query){
            die('[ERRO]: '.mysqli_error($conexao));
        }

        while($categorias = mysqli_fetch_assoc($query)):
    ?>
    <a href=""><?=$categorias['nome']?></a>
    <?php
        endwhile;
    ?>
</nav>