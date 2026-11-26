<?php 
    // il faudra remplacer le produit en brut par un appel bd 
    $produit = [
        'nom'       => "Baguette Sureau & plume de phénix",
        'marque'    => "Oli-Vendeur Héritage",
        'note'      => 4.8,
        'nb_avis'   => 128,
        'prix'      => 420
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
        <img src="" alt="" class="product-photo">
        <div class="product-info">
            <h1><?= htmlspecialchars($produit['nom']) ?></h1>
            <p class="brand">Marque : <?= htmlspecialchars($produit['marque']) ?></p>
            <p class="rating">
                <!-- Affiche le nombre d'étoile en fonction de la note -->
                <span class="stars"><?= str_repeat('★', (int)round($produit['note'])) ?></span> 
                <!-- Affiche la note sur 5 -->
                <?= number_format($produit['note'], 1, ',', '') ?>/5 · <?= (int)$produit['nb_avis'] ?> avis
            </p>
            
        </div>
        
    </section>


</body>