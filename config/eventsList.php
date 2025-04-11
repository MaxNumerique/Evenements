<?php
    // Inclure le fichier de connexion
    $bdd = require_once __DIR__ . '/connexionBDD.php';
    
    try {
        $sql = "SELECT * FROM events";
        $req = $bdd->query($sql);
        
        $events = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        error_log('Erreur lors de la récupération des événements : ' . $e->getMessage());
        die('Erreur lors de la récupération des événements.');
    }
?>