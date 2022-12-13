<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un Produit</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="creation_prod">
        <form class="cree_prod" method="POST" action="include/insertion_produit.php" enctype="multipart/form-data">
            <div class="champs_info">
                <ul>
                    <li>
                        <h3>Nom</h3>
                        <textarea id="content" name="nom_prod" rows="5" cols="50" maxlength="250" required></textarea>
                    </li>
                    <li>
                        <h3>Marque</h3>
                        <input type="text" placeholder="Marque du Produit" name="marque_prod" required>
                    </li>
                    <li>
                        <h3>Description</h3>
                        <textarea id="content" name="desc_prod" rows="5" cols="50" maxlength="250" required></textarea>
                    </li>
                    <li>
                        <h3>Prix</h3>
                        <input type="number" step='0.01' placeholder="Prix du Produit en €" name="prix_prod" required>
                    </li>
                    <li>
                        <h3>Poids</h3>
                        <input type="number" step='0.01' placeholder="Poids du Produit en kg" name="poids_prod" required>
                    </li>
                    <li>
                        <h3>Longueur</h3>
                        <input type="number" step='0.01' placeholder="Longueur du Produit en cm" name="Lon_prod" required>
                    </li>
                    <li>
                        <h3>Largeur</h3>
                        <input type="number" step='0.01' placeholder="Largeur du Produit en cm" name="lar_prod" required>
                    </li>
                    <li>
                        <h3>Hauteur</h3>
                        <input type="number" step='0.01' placeholder="Hauteur du Produit en cm" name="haut_prod" required>
                    </li>
                    <li>
                        <h3>Liste des Matériaux</h3>
                        <textarea id="content" name="mat_prod" rows="5" cols="50" maxlength="250" required></textarea>
                    </li>
                    <li>
                        <h3>Quantitée</h3>
                        <input type="number" placeholder="Quantitée Disponible" name="stock_prod" required>
                    </li>
                    <li>
                        <h3>Modèle 3D</h3>
                        <input type="file" id="idModele3D" name="idModele3D">
                    </li>
                </ul>
            </div>
            <div class="btvalider_user">
                <button type="submit" class="btvalider">Valider</button>
            </div>
        </form>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>