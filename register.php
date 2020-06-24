<?php 
include('config.php'); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee registration</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h2>Register only if you're an Employee</h2>
    </header>
    <form method="POST" action="register.php">
        <!-- display validation errors here -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Full Name :</label>
            <input type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
            <label>Email :</label>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password :</label>
            <input type="password" name="password" placeholder="Enter a password">
        </div>
        <div class="input-group">
            <label>Confirm Password :</label>
            <input type="password" name="password2" placeholder="Confirm your password">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already have an account ? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>
</html>