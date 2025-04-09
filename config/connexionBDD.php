<?php
    try {
        $cnx = new PDO(
            "mysql:host=db;port=3307;dbname=evenements;charset=utf8",
            'root',
            'root'
        );
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
?>