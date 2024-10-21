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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css"> -->
    <title><?= TITLE ?>Détails</title>
</head>

<body>

    <?php

    $idEvents = $_GET["id"];

    require '../config/eventsList.php';

    foreach ($events as $event) {
        if ($event["idEvents"] == $idEvents) {
            $event = $event;
            break;
        }
    }
    ?>

    <?php
    if (isset($_SESSION["user"])) {
        include '../templates/navConnected.php';
    } else {
        include '../templates/nav.php';
    }
    ?>

    <div class="eventContainer">
        <div class="eventDetails">
            <h2> <?php echo $event["nom"]; ?></h2>
            <img src="<?php echo $event["photo"]; ?>" alt="">
            <div class="infosEvent">
                <div class="infosEvent-left">
                    <p class="address"><?php echo $event["adresse"] . ", à " . $event["ville"]; ?></p>
                    <p class="places"></p>
                    <p class="date"><?php echo $event["date"]; ?></p>
                    <p class="price"><?php echo $event["prix"]; ?> €</p>
                    <p class="places"><?php echo $event["places"]; ?> places disponibles</p>
                </div>
                <div class="infosEvent-right">
                    <div><?php echo $event["description"]; ?></div>
                </div>
            </div>
        </div>
        <div class="butDetails">
    </div>
    

        <?php if (isset($_SESSION["user"])): ?>
            <?php if ($cnx->query("SELECT * FROM participer WHERE idUser = " . $_SESSION["user"]["id"] . " AND idEvents = " . $event["idEvents"])->fetchAll()): ?>
                <?php if ($event["places"] <= 0): ?>
                    <form action="../config/reserver.php" method="post" style="display: none;">
                        <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                        <input type="submit" value="Réserver" style="display: none;">
                    </form>
                    <form action="../config/annulerReservation.php" method="post" style="display: none;">
                        <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                        <input type="submit" value="Annuler" style="display: none;">
                    </form>
                <?php else: ?>
                    <form action="../config/reserver.php" method="post" style="display: none;">
                        <input type="submit" value="Réserver" style="display: none;">
                        <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                    </form>
                    <form action="../config/annulerReservation.php" method="post" style="display: block;">
                        <input type="submit" value="Annuler" style="display: block;">
                        <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                    </form>
                <?php endif; ?>
            <?php else: ?>
                <form action="../config/reserver.php" method="post" style="display: block">
                    <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                    <input type="submit" value="Réserver" style="display: block;">
                </form>
                <form action="../config/annulerReservation.php" method="post" style="display: none">
                    <input type="submit" value="Annuler" style="display: none;">
                    <input type="hidden" name="idEvents" value="<?= $event['idEvents'] ?>">
                </form>
            <?php endif; ?>
        <?php endif; ?>

    </div>

    <?php include '../templates/footer.php' ?>

</body>

</html>