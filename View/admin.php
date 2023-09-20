<?php
session_start();
if(!isset($_SESSION['autoris']) || $_SESSION['autoris'] !== 'ok' || $_SESSION['login'] !== 'admiN1337$')
{
    header("HTTP/1.1 403 Acces refused to the database");
    die();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="./js/admin.js"></script>
    <title>Admin</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./profil.php">Profil</a></li>
            <li><a href="../Controller/deconnect.php">Deconnection</a></li>
        </ul>
    </header>

    <main>
        <h1>Admin</h1>
        <div id="displayUser"></div>

    </main>
</body>
</html>