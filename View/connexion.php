<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/connect.css">
    <script defer src="./js/connect.js"></script>
    <title>Connection</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="./">Home</a></li>
        </ul>
    </header>
<main>

    <div class="alert"></div>

    <form action="" method="post" id="formConnect">
        
        <h1>Connection</h1>
        
        <label for="login">Login</label>
        <input type="login" name="login" 
        <?php
                if(isset($_SESSION['login'])){ ?>
                value="<?= $_SESSION['login'];?>"
                <?php } else { ?>
                    
                    placeholder="Your login ...">
                    <?php }; ?>
                    
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Your  Password ...">
                    
                    <button class="btn">Connection</button>
    </form>
                
                
</main>

</body>
</html>
