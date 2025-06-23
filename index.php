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
            margin: 0;
        }
        .logo {
            width: 200px;
            height: 200px;
            animation: rotate 2s linear;
        }
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
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