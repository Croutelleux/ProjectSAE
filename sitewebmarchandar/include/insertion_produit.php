<?php

if (
    !empty($_POST['nom_prod'])  &&
    !empty($_POST['marque_prod']) &&
    !empty($_POST['desc_prod']) &&
    !empty($_POST['prix_prod']) &&
    !empty($_POST['poids_prod']) &&
    !empty($_POST['Lon_prod']) &&
    !empty($_POST['lar_prod']) &&
    !empty($_POST['haut_prod']) &&
    !empty($_POST['mat_prod']) &&
    !empty($_POST['stock_prod'])
) {
    require 'verification.php';
    $statement = $dbh->prepare("SELECT ID FROM Product");
    $statement->execute();
    $nb_prod = count($statement->fetchAll());
    $idModele3D=0;
    $idListeImage=0;
    $sth = $dbh->prepare("
                INSERT INTO Product(ID,marque,description,nom,prix,stock,longueur,hauteur,profondeur,materiaux,idModele3D,idListeImage)
                VALUES(:ID, :marque, :description, :nom, :prix, :stock, :longueur,:hauteur,:profondeur,:materiaux,:idModele3D,:idListeImage)");
    $sth->bindParam(':ID',$nb_prod);
    $sth->bindParam(':marque', $_POST['marque_prod']);
    $sth->bindParam(':description', $_POST['desc_prod']);
    $sth->bindParam(':nom', $_POST['nom_prod']);
    $sth->bindParam(':prix', $_POST['prix_prod']);
    $sth->bindParam(':stock', $_POST['stock_prod']);
    $sth->bindParam(':longueur', $_POST['Lon_prod']);
    $sth->bindParam(':hauteur', $_POST['haut_prod']);
    $sth->bindParam(':profondeur', $_POST['lar_prod']);
    $sth->bindParam(':materiaux', $_POST['mat_prod']);
    $sth->bindParam(':idModele3D', $idModele3D);
    $sth->bindParam(':idListeImage', $idListeImage);
    $sth->execute();
    $sth = $dbh->prepare("
                INSERT INTO modele3D
                VALUES(NULL, :model");
    if ($_FILES["idModele3D"]["error"] > 0) {
    } else {
        $name = $_FILES["idModele3D"]["name"];
    }
    move_uploaded_file($_FILES["idModele3D"]["tmp_name"], '../model/' . $name);
    $sth->bindParam(':model', $name);
    $sth->execute();
    header('location: /../cree_prod.php');  
    exit;
}
