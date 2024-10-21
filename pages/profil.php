<?php

require_once '../config/config.php';
require_once '../config/connexionBDD.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= ASSETS . "css/style.css" ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title><?= TITLE ?>Détails</title>
</head>

<body>

    <?php
    if (isset($_SESSION["user"])) {
        include '../templates/navConnected.php';
    } else {
        include '../templates/nav.php';
    }

    
    ?>

    <div class="formulaireContainer">
        <?php 
        $req = $cnx->prepare("SELECT * FROM utilisateur WHERE idUser= :id");
        $req->execute(['id' => $_SESSION['user']['id']]);
        $user = $req->fetch();
        ?>
        <form action="../config/changementMDP.php" method="post" class="changerInfos">
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($user["nom"]) ?>">
            <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($user["prenom"]) ?>">
            <input type="email" name="email" id="mail" value="<?= htmlspecialchars($user["mail"]) ?>">
            <input type="password" name="oldPassword" id="oldPassword" placeholder="Mot de passe actuel">
            <input type="password" name="newPassword" id="newPassword" placeholder="Nouveau mot de passe">
            <input type="password" name="confirmedPassword" id="confirmedPassword" placeholder="Confirmer le nouveau mot de passe">
            <input type="submit" value="Modifier" name="modifier" class="modifier">
        </form>
    <?php
    if (isset($_SESSION['flash'])) {
        foreach ($_SESSION['flash'] as $type => $message) {
            echo '<div class="alert ' . $type . '">' . htmlspecialchars($message) . '</div>';
        }
        unset($_SESSION['flash']);
    } ?>
    </div>
    

    <?php include '../templates/footer.php' ?>
    
</body>
</html>
