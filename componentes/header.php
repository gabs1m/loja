<header>
    <?php

    if(empty($_SESSION)){
        $login = 'Entrar';
    } else{
        $login = $_SESSION['nomeUsuario'];
    }
    
    ?>
    <div class="header-head">
        <a href="/" title="CordESports">
            <img src="../img/logo_pequena.png" alt="Logo">
        </a>
        <div class="header-searchbar">
            <form action="/" method="get">
                <input type="search" name="busca" class="input-busca" placeholder="Busque um produto...">
                <button class="button-busca" title="Buscar">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
        </div>
        <div class="header-icons">
            <a href="" class="icon-header" title="Lista de Desejos">
                <ion-icon name="heart-outline"></ion-icon>
                <span>Wishlist</span>
            </a>
            <a href="" class="icon-header" title="Carrinho">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Carrinho</span>
            </a>
            <a href="../usuario/formLogin.php?id=<?=null?>" class="icon-header" title="Entre ou Cadastre-se">
                <ion-icon name="person-outline"></ion-icon>
                <span><?php
                    if(empty($_SESSION)){
                        echo("Entrar");
                    } else{
                        echo $_SESSION['nomeUsuario'];
                    }
                ?></span>
            </a>
            <?php
            if(!empty($_SESSION)): ?>
            <a href="../usuario/sairUsuario.php" class="icon-header" title="Sair">
                <ion-icon name="exit-outline"></ion-icon>
                <span>Sair</span>
            </a>
            <?php if($_SESSION['tipoUsuario'] ==  'admin'): ?>
            <a href="../dashboard.php" class="icon-header" title="Dashboard">
                <ion-icon name="clipboard-outline"></ion-icon>
                <span>Dashboard</span>
            </a>
            <?php
                endif;
            endif;
            ?>
        </div>
    </div>
</header>