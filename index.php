<?php
require_once 'config/connexionBDD.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <style>
        body {
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .logo {
            width: 50%;
            animation: pulse 2s ease-in-out infinite alternate;
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
    <img src="assets/img/max.svg" alt="logo" class="logo">
    <script>
        setTimeout(function() {
            window.location.href = "pages/evenements.php";
        }, 2000);
    </script>
</body>
</html>
