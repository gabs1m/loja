<header>
    <div class="header-head">
        <h1>Logo</h1>
        <div class="header-searchbar">
            <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
                <input type="search" name="busca" class="input-busca" placeholder="Busque um produto...">
                <button class="button-busca" title="Buscar">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
        </div>
        <div class="header-icons">
            <a href="" class="icon-header" title="Dashboard">
                <ion-icon name="clipboard-outline"></ion-icon>
                <span>Dashboard</span>
            </a>
            <a href="" class="icon-header" title="Lista de Desejos">
                <ion-icon name="heart-outline"></ion-icon>
                <span>Wishlist</span>
            </a>
            <a href="" class="icon-header" title="Entre ou Cadastre-se">
                <ion-icon name="person-outline"></ion-icon>
                <span>Entrar</span>
            </a>
            <a href="" class="icon-header" title="Carrinho">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Carrinho</span>
            </a>
        </div>
    </div>
</header>