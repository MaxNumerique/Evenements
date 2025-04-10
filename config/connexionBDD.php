<?php
    // Récupérer l'URL de connexion depuis les variables d'environnement
    $mysqlHost = getenv('MYSQLHOST') ?: 'localhost';
    $mysqlPort = getenv('MYSQLPORT') ?: 3306;
    $mysqlDatabase = getenv('MYSQLDATABASE') ?: 'evenements';
    $mysqlUser = getenv('MYSQL_USER') ?: 'root';
    $mysqlPassword = getenv('MYSQL_ROOT_PASSWORD') ?: 'root';

    try {
        $cnx = new PDO(
            "mysql:host={$mysqlHost};port={$mysqlPort};dbname={$mysqlDatabase};charset=utf8",
            $mysqlUser,
            $mysqlPassword
        );
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        // Log détaillé de l'erreur
        error_log('Erreur de connexion à la base de données : ' . $e->getMessage());
        error_log('Détails de connexion :');
        error_log('Hôte : ' . $mysqlHost);
        error_log('Port : ' . $mysqlPort);
        error_log('Base de données : ' . $mysqlDatabase);
        
        die('Erreur de connexion à la base de données. Vérifiez vos paramètres de connexion.');
    }
?>