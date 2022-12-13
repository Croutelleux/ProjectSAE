<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un Administrateur</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="creation_admin">
            <form class="cree" method="GET" action="cree.php">
                <div class="champs_info">
                    <ul>
                        <li>
                            <h3>Email</h3>
                            <input type="email" placeholder="Adresse Mail" name="mail" required autofocus>
                        </li>
                        <li>
                            <h3>Nom</h3>
                            <input type="text" placeholder="Nom" name="lastname" required>
                        </li>
                        <li>
                            <h3>Prénom</h3>
                            <input type="text" placeholder="Prénom" name="name" required>
                        </li>
                        <li>
                            <h3>Mot de Passe</h3>
                            <input type="password" placeholder="Mot de Passe" name="mdp" required>
                        </li>
                    </ul>
                </div>
                <div class="btdroit_btvalider">
                    <a href="cree_new_admin.php">Droits</a>
                    <button type="submit" class="btvalider">Valider</button>
                </div>
            </form>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>