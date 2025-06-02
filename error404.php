<?php
include('conf.inc.php');
try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASSWORD);
    $req = $db->query('SELECT * FROM abonnes WHERE abonne_id = 10');
    $abonne = $req->fetch();
    echo "<p>Ceci n'est pas la page que vous cherchez, mais la page d'erreur 404</p>";
    echo "<p>Pour toute question, contactez : ".$abonne['abonne_prenom']." ".$abonne['abonne_nom']."</p>";
    echo "<p>Identifiant : ".$abonne['abonne_identifiant']."</p>";
    echo "<p> <a href='home.html'>Retour</a></p>";

} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

