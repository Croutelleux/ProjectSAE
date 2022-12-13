<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="gestion_poduit">
        <div class="box_gestion_prod">
        <h1>Gestion des Produits</h1>
            <div class="btdroit_btvalider">
                <a href="cree_prod.php">Ajouter Produit</a>
                <a href="modifier_prod.php">Gérer Produit</a>
            </div>
        </div>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>