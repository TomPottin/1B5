<?php 
    // il faudra remplacer le produit en brut par un appel bd 
    $produit = [
        'nom'           => "Baguette Sureau & plume de phénix",
        'marque'        => "Oli-Vendeur Héritage",
        'note'          => 4.8,
        'nb_avis'       => 128,
        'prix'          => 420,
        'dispo'         => 'En stock',
        'performances'  => [
                            ["Vitesse d'incantation", 95, '×2 vs moyenne'],
                            ['Puissance',             85, 'Élevée'],
                            ['Précision',             68, 'Bonne'],
                           ],
        'taille'        => [25,28,31,34],  
        'note_avis'     => 5,
        'nom_avis'      => "Célestia R."
        
    ]
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($produit["nom"]) ?> - Oli-Vendeur</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include_once("code/include/header.php") ?>
    <main class="container">
    <nav class="breadcrumb" aria-label="Fil d'Ariane">
        <!-- Il faudra remplacer les # par le lien des pages correspondante -->
        <a href="#">Accueil</a> > <a href="#">Baguettes</a> > <span><?= htmlspecialchars($produit['nom']) ?></span>
    </nav>
    <section class="product">

        <img src="../assets/images/cg_product_image.png" alt="<?= htmlspecialchars($produit['nom']) ?>" class="product-photo">

        <div class="product-info">
            <h1><?= htmlspecialchars($produit['nom']) ?></h1>
            <p class="brand">Marque : <?= htmlspecialchars($produit['marque']) ?></p>
            <p class="rating">
                <!-- Affiche le nombre d'étoile en fonction de la note -->
                <span class="stars"><?= str_repeat('★', (int)round($produit['note'])) ?></span> 
                <!-- Affiche la note sur 5 -->
                <?= number_format($produit['note'], 1, ',', '') ?>/5 · <?= (int)$produit['nb_avis'] ?> avis
            </p>
            <p class="price"><?= htmlspecialchars($produit['prix']) ?>€</p>
            <!-- dot affiche le point a cote du texte -->
            <p class="stock"><span class="dot"></span><?= htmlspecialchars($produit['dispo']) ?></p>


            <h2 class="label">Performances</h2>
            <ul class="perf">
                <?php foreach ($produit['performances'] as [$nom, $valeur, $texte]): ?>
                    <li>
                        <span class="perf-name"><?= htmlspecialchars($nom) ?></span>
                        <span class="bar"><span style="width: <?= (int)$valeur ?>%"></span></span>
                        <span class="perf-value"><?= htmlspecialchars($texte) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <form>
                <h2 class="label">Longueur</h2>
                <div class="sizes"> 
                    <!-- Affiche la liste des tailles 28 en selected et 34 en hors stock (barée) -->
                    <?php foreach ($produit['taille'] as $taille): ?>
                            <input class="size<?= ($taille == 28 ? ' selected' : '').( $taille == 34 ? ' unavailable' : '')?>" type="button" name="taille" value="<?= $taille ?> cm">
                    <?php endforeach;?>
                </div>
            </form>
                <input class="btn-primary" type="button" name="panier" value="Ajouter au panier">
        </div>
    </section>
    <section class="cards">
            <article class="card">
                <h2>Caractéristiques</h2>
                <p class="muted">Bois - Coeur - Longueur - Souplette</p>
            </article>

            <article class="card">
                <h2>Avis clients</h2>
                <p class="review">
                    <span class="stars"><?= str_repeat('★', (int)$produit['note_avis'])?> </span> 
                    <strong> <?= htmlspecialchars($produit["nom_avis"])?></strong>
                    <span class="muted">achat vérifié</span>
                </p>
            </article>
    </section>

</body>
</html>