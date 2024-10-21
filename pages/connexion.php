<?php
require_once '../config/config.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?>Login</title>
    <link rel="stylesheet" href=<?= ASSETS . "css/style.css" ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <?php include '../templates/nav.php'; ?>

    <div class="formulaireContainer">
        <h2>CONNEXION</h2>


        <form class="connexion" action="../config/connexionCheck.php" method="post">
            <input type="email" name="mail" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Valider" name="connexion">
        </form>
        
        <?php
        if (isset($_SESSION['flash'])) {
            foreach ($_SESSION['flash'] as $type => $message) {
                echo '<div class="alert ' . $type . '">' . htmlspecialchars($message) . '</div>';
            }
            unset($_SESSION['flash']);
        }
        ?>
    </div>

    <?php include '../templates/footer.php'; ?>

</body>
</html>
