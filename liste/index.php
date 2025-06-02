<?php
include('../conf.inc.php');
try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASSWORD);
    $req = $db->query('SELECT * FROM abonnes');
    $abonnes = $req->fetchAll();
    foreach ($abonnes as $abonne) {
        echo "<p> " .$abonne['abonne_prenom'] . " " . $abonne['abonne_nom']."  - Identifiant : " . $abonne['abonne_identifiant'] . "</p>";
    }
    echo "<p> <a href='../home.html'>Retour</a></p>";
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
