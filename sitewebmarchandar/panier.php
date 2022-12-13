<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'
    ?>
    <main class="gestion_panier">
        <div class="box_panier">
            <h1>Mon Panier</h1>
            <ul>
                <li>
                    <div class="produit">
                        <img src="/img/img-2<?= fctImage(); ?>" alt="Image d'un pont" id="img-1">
                        <div class="info_prod">
                            <h3>Nom de l'article</h3>
                            <div class="quantite_supp">
                                <input type="text" placeholder="Quantité" name="quantiee">
                                <button type="submit" class="btsupprimer_prod_pannier">Supprimer du Panier</button>
                            </div>

                        </div>
                        <div class="prix">
                            <p>Prix</p>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="produit">
                        <img src="/img/img-2<?= fctImage(); ?>" alt="Image d'un pont" id="img-1">
                        <div class="info_prod">
                            <h3>Nom de l'article</h3>
                            <div class="quantite_supp">
                                <input type="text" placeholder="Quantité" name="quantiee">
                                <button type="submit" class="btsupprimer_prod_pannier">Supprimer du Panier</button>
                            </div>

                        </div>
                        <div class="prix">
                            <p>Prix</p>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
        <div class="passer_commande">  
            <button type="submit" class="valider_pannier">Passer la Commande</button>
            <p>Prix Total</p>
        </div>


    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>