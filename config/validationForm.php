<?php
session_start(); 
require '../config/connexionBDD.php'; 
require 'validData.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = valid_data($_POST['nom']);
    $prenom = valid_data($_POST['prenom']);
    $mail = valid_data($_POST['mail']);
    $password = valid_data($_POST['password']);
    
    $errors = [];

    if (empty($nom)) {
        $errors[] = 'Le champ Nom est requis.';
    }
    if (empty($prenom)) {
        $errors[] = 'Le champ Prénom est requis.';
    }
    if (empty($mail)) {
        $errors[] = 'Le champ Email est requis.';
    }
    if (empty($password)) {
        $errors[] = 'Le champ Mot de passe est requis.';
    }

    $req = $cnx->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
    $req->execute(['mail' => $mail]);
    if ($req->fetch()) {
        $errors[] = 'Cet email est déjà utilisé.';
    }

    if (!empty($errors)) {
        $_SESSION['flash']['danger'] = implode('<br>', $errors); 
        header('Location: ../pages/inscription.php');
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $req = $cnx->prepare("INSERT INTO utilisateur (nom, prenom, mail, password, admin) VALUES (:nom, :prenom, :mail, :password, 0)");
    $req->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'password' => $hashedPassword
    ]);

    $_SESSION['flash']['success'] = 'Inscription réussie. Vous pouvez maintenant vous connecter.';
    header('Location: ../pages/connexion.php');
    exit;
}
