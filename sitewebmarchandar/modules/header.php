<header>
    <nav>
        <div class="conteneur-nav">
            <label for="mobile">☰</label>
            <input type="checkbox" id="mobile">
            <ul>
                <li>
                    <a href="index.php" class="logo_li"><img src="/img/img-1<?= fctImage(); ?>" alt="Logo site web" class="image_nav"></a>
                </li>
                <form class="rechercher" method="GET" action="rechercher.php">
                    <li>
                        <input type="text" placeholder="Rechercher">
                    </li>
                    <li>
                        <button type="submit"><img src="/img/logo-loupe.png" alt="icone loupe"></button>
                    </li>
                </form>
                <li class="<?= ($_SERVER['PHP_SELF'] == '/gestion_site_web.php') ? 'active' : ''  ?>">
                    <a href="gestion_site_web.php">Gestion du Site</a>
                </li>
                <li class="<?= ($_SERVER['PHP_SELF'] == '/panier.php') ? 'active' : ''  ?>">
                    <a href="panier.php">Panier</a>
                </li>
                <li class="<?= ($_SERVER['PHP_SELF'] == '/compte.php') ? 'active' : '' ?>">
                    <a href="compte.php">Compte</a>
                </li>
            </ul>
        </div>
    </nav>
</header>