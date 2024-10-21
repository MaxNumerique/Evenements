<?php
session_start();
require '../config/connexionBDD.php';
require 'validData.php';

if (isset($_POST['connexion'])) {
    $mail = valid_data($_POST['mail']);
    $password = valid_data($_POST['password']);

    $req = $cnx->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
    $req->execute(['mail' => $mail]);
    $user = $req->fetch();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user']['prenom'] = $user['prenom'];
            $_SESSION['user']['nom'] = $user['nom'];
            $_SESSION['user']['admin'] = $user['admin'];
            $_SESSION['user']['mail'] = $user['mail'];
            $_SESSION['user']['password'] = $user['password'];
            $_SESSION['user']['id'] = $user['idUser'];

            header('Location: ../pages/evenements.php');
            exit;
        } else {
            $_SESSION['flash']['danger'] = 'Mot de passe incorrect';
        }
    } else {
        $_SESSION['flash']['danger'] = 'Email non trouvé';
    }

    header('Location: ../pages/connexion.php');
    exit;
}
