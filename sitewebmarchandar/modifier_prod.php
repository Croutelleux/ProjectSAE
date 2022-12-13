<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="modif_prod">

        <form class="cree_prod" method="GET" action="cree_prod.php">
            <div class="liste_produit">
                <h2>Séléctionner un produit</h2>
                <select name="select_prod" size="5">
                    <option value="Produit1">Produit</option>
                    <option value="Produit2">Produit</option>
                    <option value="Produit3">Produit </option>
                    <option value="Produit4">Produit </option>
                    <option value="Produit5">Produit </option>
                    <option value="Produit6">Produit</option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                    <option value="Produit7">Produit </option>
                </select>
            </div>

            <div class="champs_info">
                <ul>
                    <li>
                        <h3>Ancien Nom</h3>
                        <p>Nom Article</p>
                        <h3>Nouveau Nom</h3>
                        <textarea id="content" name="nom_prod" rows="5" cols="50" maxlength="250"></textarea>
                    </li>
                    <li>
                        <h3>Ancienne Marque</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle Marque</h3>
                        <input type="text" placeholder="Marque du Produit" name="marque_prod">
                    </li>
                    <li>
                        <h3>Ancienne Description</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle Description</h3>
                        <textarea id="content" name="desc_prod" rows="5" cols="50" maxlength="250"></textarea>
                    </li>
                    <li>
                        <h3>Ancien Prix</h3>
                        <p>Caratéristique</p>
                        <h3>Nouveau Prix</h3>
                        <input type="number" step='0.01' placeholder="Prix du Produit en €" name="prix_prod">
                    </li>
                    <li>
                        <h3>Ancien Poids</h3>
                        <p>Caratéristique</p>
                        <h3>Nouveau Poids</h3>
                        <input type="number" step='0.01' placeholder="Poids du Produit en kg" name="poids_prod">
                    </li>
                    <li>
                        <h3>Ancienne Longueur</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle Longueur</h3>
                        <input type="number" step='0.01' placeholder="Longueur du Produit en cm" name="Lon_prod">
                    </li>
                    <li>
                        <h3>Ancienne Largeur</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle Largeur</h3>
                        <input type="number" step='0.01' placeholder="Largeur du Produit en cm" name="lar_prod">
                    </li>
                    <li>
                        <h3>Ancienne Hauteur</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle Hauteur</h3>
                        <input type="number" step='0.01' placeholder="Hauteur du Produit en cm" name="haut_prod">
                    </li>
                    <li>
                        <h3>Ancienne liste des Matériaux</h3>
                        <p>Caratéristique</p>
                        <h3>Nouvelle liste des Matériaux</h3>
                        <textarea id="content" name="mat_prod" rows="5" cols="50" maxlength="250"></textarea>
                    </li>
                    <li>
                        <h3>Ancienne Quantitée</h3>
                        <p>Quantitée</p>
                        <h3>Nouvelle Quantitée</h3>
                        <input type="number" placeholder="Quantitée Disponible" name="stock_prod">
                    </li>
                </ul>
            </div>
            <div class="valider_modifier">
                <button type="submit" class="btsupprimer">Supprimer Produit</button>
                <button type="submit" class="btvalider">Valider Modification</button>
            </div>
        </form>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>