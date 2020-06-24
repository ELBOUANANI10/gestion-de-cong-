<?php 




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style2.css">
    <title>Mon espace</title>
</head>

<body>
    <header>
        <form action="" method="post">
            <span class="header">
                <h1>Bonjour  <?php echo 'Souad' ;?> </h1>
             </span>
    </header>
    <form action="" method="post">
        <button class='btn' type="submit" name="demandecongee"><a href="formule.php">Demander un congé</a></button>
        <button class='btn' type="submit" name="notification"><a href="result.php">Voir mes notifications</a></button>
        <button class='btn' type="submit" name="disconnect"><a href="login.php">Me déconnecter</a></button>
    </form>
</body>
</html>
