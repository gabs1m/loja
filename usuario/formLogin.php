<?php session_start(); 
    if(!empty($_SESSION)){
        header('Location: ../index.php');
    } else{
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../componentes/head.php"; ?>
</head>
<body>
    <?php require "../database/conexao.php"; ?>
    <?php require "../componentes/header.php"; ?>
    <?php require "../componentes/navbar2.php"; ?>
    <form class="form-general" action="login.php" method="post" enctype="multipart/form-data">
        <div class="form-container">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha">
            </div>
            <button>Confirmar</button>
            <span>Não tem uma conta? <a href="formRegistrar.php?id=<?=null?>">Clique aqui</a></span>
        </div>
    </form>
    <?php require "../componentes/footer.php"; ?>
    <?php require "../componentes/js-scripts.php"; ?>
</body>
</html>
<?php } ?>