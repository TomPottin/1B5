<?php
//  données en dur filtres qui fonctionne pas  
$produits = [
    ['nom' => 'Baguette Sureau',      'prix' => '420 €',   'rupture' => false],
    ['nom' => 'Baguette Saule',       'prix' => '310 €',   'rupture' => false],
    ['nom' => 'Baguette Chêne blanc', 'prix' => '1 250 €', 'rupture' => true],
    ['nom' => 'Baguette Vigne',       'prix' => '280 €',   'rupture' => false],
    ['nom' => 'Baguette Houx',        'prix' => '650 €',   'rupture' => false],
    ['nom' => 'Baguette Noyer',       'prix' => '980 €',   'rupture' => false],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue - Oli-Vendeur</title>
    <link rel="stylesheet" href="../assets/css/syleCatalogue.css">
</head>
    
<body>
    <?php require_once("../include/head.php"); ?>
    <?php require_once("../include/header.php"); ?>
    
    <main class="container">
        <nav class="breadcrumb" aria-label="Fil d'Ariane">
            <a href="#">Accueil</a> > <span>Baguettes</span>
        </nav>

        <h1>Baguettes magiques</h1>

        <div class="catalogue">

            <!-- Filtres (maquette) -->
            <form class="filtres">
                <h2>Filtres</h2>

                <div class="colonnes">
                    <div class="colonne">
                        <fieldset>
                            <legend>Prix</legend>
                            <input type="range" min="200" max="1600" value="200" aria-label="Prix">
                            <output class="intervalle">200 € — 1 600 €</output>
                        </fieldset>

                        <fieldset>
                            <legend>Marque</legend>
                            <label><input type="checkbox"> Oli-Vendeur Héritage</label>
                            <label><input type="checkbox"> Oli-Vendeur Prestige</label>
                            <label><input type="checkbox"> Oli-Vendeur Apprenti</label>
                        </fieldset>

                        <fieldset>
                            <legend>Regroupement</legend>
                            <label><input type="checkbox"> Nouveautés</label>
                            <label><input type="checkbox"> Meilleures ventes</label>
                            <label><input type="checkbox"> Soldes</label>
                        </fieldset>

                       <fieldset>
                            <legend>Disponibilité</legend>
                            <label><input type="checkbox"> En stock</label>
                            <label><input type="checkbox"> En rupture de stock</label>
                        </fieldset>
                    </div>

                    <div class="colonne">
                        <fieldset>
                            <legend>Bois</legend>
                            <label><input type="checkbox"> Sureau</label>
                            <label><input type="checkbox"> Saule</label>
                            <label><input type="checkbox"> Chêne blanc</label>
                        </fieldset>

                        <fieldset>
                            <legend>Cœur</legend>
                            <label><input type="checkbox"> Cœur de dragon</label>
                            <label><input type="checkbox"> Crin de licorne</label>
                            <label><input type="checkbox"> Plume de phénix</label>
                        </fieldset>

                        <fieldset>
                            <legend>Longueur</legend>
                            <input type="range" min="20" max="40" value="20" aria-label="Longueur">
                            <output class="intervalle">20 cm — 40 cm</output>
                        </fieldset>

                        <fieldset>
                            <legend>Souplesse</legend>
                            <label><input type="checkbox"> Rigide</label>
                            <label><input type="checkbox"> Relativement rigide</label>
                            <label><input type="checkbox"> Souple</label>
                            <label><input type="checkbox"> Élastique</label>
                        </fieldset>
                    </div>
                </div>

                <button type="button" class="btn-filtrer">Filtrer</button>
            </form>

            <!-- Produits -->
            <section class="produits">
                <?php foreach ($produits as $p): ?>
                    <article class="carte<?= $p['rupture'] ? ' rupture' : '' ?>">
                        <a class="photo" href="#">Photo</a>
                        <h3><a href="#"><?= $p['nom'] ?></a></h3>
                        <p class="note"><span class="etoiles">★★★★☆</span> <a href="#">(avis)</a></p>
                        <p class="prix"><?= $p['prix'] ?></p>
                        <button type="button" class="btn-panier"<?= $p['rupture'] ? ' disabled' : '' ?>>
                            <?= $p['rupture'] ? 'Rupture de stock' : 'Ajouter au panier' ?>
                        </button>
                    </article>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
    <?php require_once("../include/footer.php"); ?>
</body>
</html>