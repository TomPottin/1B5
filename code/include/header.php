<!-- juste pour correspondre à la charte graphique -->
<?php $nombreArticles =  4 ?>

<body>
    <header class="header">

        <div class="souscontainer">

            <a href="index.php" class="logo">
                <span class="logo-icon"></span>
                <span>OLI-VENDEUR</span>
            </a>

            <nav class="navigation">
                <a href="/index.php">Accueil</a>
                <!-- pages php ayant pour seul objectif de filtrer le catalogue -->
                <a href="/pages/CG_page_produit.php">Baguettes</a>
                <a href="/pages/balais.php">Balais</a>
                <a href="/pages/potions.php">Potions</a>
                <a href="/pages/livres.php">Livres & Parchemins</a>
                <a href="/pages/nouveautes.php">Nouveautés</a>
                <a href="/pages/soldes.php">Soldes</a>
            </nav>
        </div>

        <div class="souscontainer">
            <form action="recherche.php" method="GET" class="recherche-form">
                <span class="recherche-icone">🔎</span>
                <input
                    type="text"
                    name="rech"
                    placeholder="Rechercher un produit...">
            </form>

            <a href="/pages/Compte.php" class="header-link">
                <span class="icon">👤</span>
                <span>Mon compte</span>
            </a>

            <a href="panier.php" class="header-link">
                <span class="icon">🛒</span>
                <span>Panier</span>
                <span class="cart-count"><?= $nombreArticles ?></span>
            </a>
        </div>
    </header>

    