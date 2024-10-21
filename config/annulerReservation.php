<?php

session_start();

require_once '../config/connexionBDD.php';

if (isset($_SESSION['user'])) {


    $idEvents = $_POST['idEvents'];
    $req = $cnx->prepare("DELETE FROM participer WHERE idUser = :idUser AND idEvents = :idEvents");
    $req->execute(['idUser' => $_SESSION['user']['id'], 'idEvents' => $idEvents]);
    $req = $cnx->prepare("UPDATE events SET places = places + 1 WHERE idEvents = :idEvents");
    $req->execute(['idEvents' => $idEvents]);

    header('Location: ' . $_SERVER['HTTP_REFERER']);

} else {
    header('Location: ../pages/connexion.php');
}
?>