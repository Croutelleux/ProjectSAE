<?php
require  __DIR__ . "/verification.php";
$statement = $dbh->prepare("SELECT marque,prix,description FROM Product ");
$statement->execute();
$listeproduit = $statement->fetchAll();





