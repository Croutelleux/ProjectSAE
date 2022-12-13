<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php';
    include  'include/affiche-produit.php';

    ?>
    <main>
        <div class="page_accueil">
            <?php
            foreach ($listeproduit as $produit) :
            ?>
                <div class="box-produit">
                    <h2><?= $produit['marque'] ?></h2>
                    <img src="/img/img-2<?= fctImage(); ?>" alt="Image d'un pont" id="img-1">
                    <h3><?= $produit['prix'] ?></h3>
                    <p><?= $produit['description'] ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>