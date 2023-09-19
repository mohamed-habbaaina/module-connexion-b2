<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="./js/authont.js"></script>
    <title>Home</title>
</head>
<body>
    <?php //require_once('./inscription.php'); ?>

    <form action="" method="post" id="formRegister">
            
            <h1>Inscription</h1>
            
            <label for="login">Login</label>
            <input type="login" name="login" placeholder="Your login ...">
            
            <label for="firstName">FirstName</label>
            <input type="text" name="firstName" placeholder="Your FirstName ...">

            <label for="lastName">LastName</label>
            <input type="text" name="lastName" placeholder="Your lastName ...">
            
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Your  Password ...">
            
            <label for="rePass">Confirmer Password</label>
            <input type="password" name="rePass" placeholder="Confirm Password ...">
            
            <button class="btn">Register</button>
        </form>

        <div class="alert"></div>
</body>
</html>