<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'sqlite:' . __DIR__ . '/basedonneSAE.db';
$user = null;
$password = null;
try {
    $dbh = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}
