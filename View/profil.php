<?php
session_start();
if(!isset($_SESSION['autoris']) || $_SESSION['autoris'] !== 'ok')
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
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/connect.css">
    <script defer src="./js/profil.js"></script>
    <title>Profil</title>
</head>
<body>

<header>
<?php
        if(isset($_SESSION['autoris']) && $_SESSION['autoris'] === 'ok' && $_SESSION['login'] === 'admiN1337$'){ ?>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./admin.php">Admin</a></li>
                <li><a href="../Controller/deconnect.php">Deconnection</a></li>
            </ul>
        <?php } else{ ?>
            <ul>

                <li><a href="./">Home</a></li>
                <li><a href="../Controller/deconnect.php">Deconnection</a></li>
            </ul>
            <?php } ?>
</header>
<main>
    <div class="alert"></div>

    <form action="" method="post" id="formProfil">
        
        <h1>Profil</h1>
        
        <label for="login">Login</label>
        <input type="login" name="login" value="<?= $_SESSION['login'];?>">
        
        <label for="firstName">FirstName</label>
        <input type="text" name="firstName" placeholder="Your FirstName ...">
        
        <label for="lastName">LastName</label>
        <input type="text" name="lastName" placeholder="Your lastName ...">
        
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Your Password ...">
        
        <label for="rePass">Confirm Password</label>
        <input type="password" name="rePass" placeholder="Confirm Password ...">
        
        <button class="btn">Submit</button>
    </form>
    
    
</main>

</body>
</html>
