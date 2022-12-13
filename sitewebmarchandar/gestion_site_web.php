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
    <main class="main_gestion">
        <h1>Gestion du Site</h1>
        <div class="personnalisation">
            <form class="modifier" method="GET" action="modifier.php">
                <div class="couleur_prim">
                    <h2>Couleur Primaire</h2>
                    <input type="color">
                </div>
                <div class="couleur_second">
                    <h2>Couleur Secondaire</h2>
                    <input type="color">
                </div>
                <div class="option">
                    <select name="select_police">
                        <option value="arial" id="arial">Arial</option>
                        <option value="calibri" id="calibri">Calibri</option>
                        <option value="courier new" id="courrier">Courier new </option>
                        <option value="helvetica" id="helvetica">Helvetica </option>
                        <option value="times new" id="times">Times new </option>
                        <option value="papyrus" id="papyrus">Papyrus </option>
                        <option value="trebuchet ms" id="trebuchet">Tr&eacute;buchet ms </option>
                    </select>
                    <label for="import_logo" class="custom-file-upload">
                        Modifier Logo
                    </label>
                    <input id="import_logo" type="file" />
                    <a href="cree_new_admin.php">Ajout Administrateur</a>
                    <a href="gestion_produit.php">Gestion des Produits</a>
                </div>
                <div class="valider_modification">
                    <button type="submit" class="btvalider">Valider</button>
                </div>


            </form>
        </div>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>