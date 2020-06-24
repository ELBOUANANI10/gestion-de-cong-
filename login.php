<?php 
include('config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to your account</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h2>Login form</h2>
    </header>
    <form method="POST" action=""> 
               <!-- display validation errors here -->
        <?php include('errors.php'); ?>   
        <div class="input-group">
            <label>Email :</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="input-group">
            <label>Password :</label>
            <input type="password" name="password" placeholder="Enter a password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Don't have an account ? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>