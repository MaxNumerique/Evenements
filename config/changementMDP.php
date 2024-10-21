<?php
require_once '../config/connexionBDD.php';
require_once '../config/connexionCheck.php';

$req = $cnx->prepare("SELECT * FROM utilisateur WHERE idUser = :idUser");
$req->execute(['idUser' => $_SESSION['user']['id']]);
$user = $req->fetch();

if (password_verify($_POST['oldPassword'], $user['password'])) {
    $modif = false;

    if (isset($_POST['nom']) && $_POST['nom'] != $user['nom']) {
        $req = $cnx->prepare("UPDATE utilisateur SET nom = :nom WHERE idUser = :idUser");
        $req->execute(['nom' => $_POST['nom'], 'idUser' => $_SESSION['user']['id']]);
        $modif = true;
    }

    if (isset($_POST['prenom']) && $_POST['prenom'] != $user['prenom']) {
        $req = $cnx->prepare("UPDATE utilisateur SET prenom = :prenom WHERE idUser = :idUser");
        $req->execute(['prenom' => $_POST['prenom'], 'idUser' => $_SESSION['user']['id']]);
        $modif = true;
    }

    if (isset($_POST['email']) && $_POST['email'] != $user['mail']) {
        $req = $cnx->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
        $req->execute(['mail' => $_POST['email']]);
        $emailCheck = $req->fetch();

        if (!$emailCheck) { 
            $req = $cnx->prepare("UPDATE utilisateur SET mail = :mail WHERE idUser = :idUser");
            $req->execute(['mail' => $_POST['email'], 'idUser' => $_SESSION['user']['id']]);
            $modif = true;
        } else {
            $_SESSION['flash']['danger'] = 'Cet email est déjà utilisé';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    if (!empty($_POST['newPassword']) && !empty($_POST['confirmedPassword'])) {
        if ($_POST['newPassword'] == $_POST['confirmedPassword']) {
            $req = $cnx->prepare("UPDATE utilisateur SET password = :password WHERE idUser = :idUser");
            $req->execute([
                'password' => password_hash($_POST['newPassword'], PASSWORD_BCRYPT),
                'idUser' => $_SESSION['user']['id']
            ]);
            $modif = true;
        } else {
            $_SESSION['flash']['danger'] = 'Les mots de passe ne sont pas identiques';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    if ($modif) {
        $_SESSION['flash']['success'] = 'Profil mis à jour avec succès';
    } else {
        $_SESSION['flash']['danger'] = 'Aucune modification apportée';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;

} else {
    $_SESSION['flash']['danger'] = 'Mot de passe actuel incorrect';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
