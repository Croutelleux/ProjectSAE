<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="connexion">
        <form class="connect" method="GET" action="connect.php">
            <div class="champs_info">
                <ul>
                    <li>
                        <h3>Email</h3>
                        <input type="email" placeholder="Adresse Mail" name="mail" required autofocus>
                    </li>
                    <li>
                        <h3>Mot de Passe</h3>
                        <input type="password" placeholder="Mot de Passe" name="mdp" required>
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