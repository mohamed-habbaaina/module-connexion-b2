<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/connect.css">
    <script defer src="./js/authont.js"></script>
    <title>Register</title>
</head>
<body>
<header>
        <ul>
            <li><a href="./">Home</a></li>
        </ul>
    </header>


<main>

    <div class="alert"></div>

    <form action="" method="post" id="formRegister">
        
        <h1>Register</h1>
        
        <label for="login">Login</label>
        <input type="login" name="login" placeholder="Your login ...">
        
        <label for="firstName">FirstName</label>
        <input type="text" name="firstName" placeholder="Your FirstName ...">
        
        <label for="lastName">LastName</label>
        <input type="text" name="lastName" placeholder="Your lastName ...">
        
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Your  Password ...">
        
        <label for="rePass">Confirm Password</label>
        <input type="password" name="rePass" placeholder="Confirm Password ...">
        
        <button class="btn">Register</button>
    </form>
    
    
</main>

</body>
</html>
