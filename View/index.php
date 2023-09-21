<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Home</title>
</head>
<body>

<header>
    <?php
        if(isset($_SESSION['autoris']) && $_SESSION['autoris'] === 'ok' && $_SESSION['login'] === 'admiN1337$'){ ?>
            <ul>
                <li><a href="./admin.php">Admin</a></li>
                <li><a href="./profil.php">Profil</a></li>
                <li><a href="../Controller/deconnect.php">Deconnection</a></li>
            </ul>
        <?php } elseif (isset($_SESSION['autoris']) && $_SESSION['autoris'] === 'ok') { ?>
            <ul>

                <li><a href="./profil.php">Profil</a></li>
                <li><a href="../Controller/deconnect.php">Deconnection</a></li>
            </ul>
            <?php } else{ ?>
            <ul>

                <li><a href="./connexion.php">Connection</a></li>
                <li><a href="./inscription.php">Register</a></li>
            </ul>
    <?php } ?>

</header>

    
</body>
</html>