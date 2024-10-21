<?php

require_once '../config/config.php';
require_once '../config/connexionBDD.php';
session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?>Evenements</title>
    <link rel="stylesheet" href=<?= ASSETS . "css/style.css" ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css"> -->
</head>

<body>
    <header>

        <?php
        if (isset($_SESSION["user"])) {
            include '../templates/navConnected.php';
        } else {
            include '../templates/nav.php';
        }
        require '../config/eventsList.php';
        ?>
        <div class="eventContainer">
            <?php
            foreach ($events as $event) { ?>
                <div class="event">
                    <h2> <?php echo $event["nom"]; ?></h2>
                    <img src="<?php echo $event["photo"]; ?>" alt="">
                    <div class="infosEvent">
                        <p class="date"><?php echo $event["date"]; ?></p>
                        <p class="price"><?php echo $event["prix"]; ?> €</p>
                    </div>
                    <p class="places"><?php echo $event["places"]; ?> places disponibles</p>
                    <div class="buttons">


                        <?php if (isset($_SESSION["user"])): 
                            
                            $stmt = $cnx->prepare("SELECT * FROM participer WHERE idUser = :idUser AND idEvents = :idEvents");
                            $stmt->execute(['idUser' => $_SESSION['user']['id'], 'idEvents' => $event['idEvents']]);


                            ?>
                            <?php if ( $stmt->fetchAll(PDO::FETCH_ASSOC)): ?>
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


                        <a href="details.php?id=<?php echo $event["idEvents"]; ?>"><button class="btn"> Voir détails</button></a>
                    </div>
                </div>
            <?php }
            ?>
        </div>

        <?php include  '../templates/footer.php' ?>
</body>

</html>