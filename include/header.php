<?php
session_start();
include("./config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style2.css">
    <title>Mon espace</title>
</head>

<body>
    <form action="" method="post">
    <span class="header">
        <h1>Bonjour M. <?php echo 'fof' ;?> </h1>
    </span>
    <form action="" method="post">
        <button type="submit" name="demandecongee"><a href="">Demander un congé</a></button>
        <button type="submit" name="notification"><a href="">Voir mes notifications</a></button>
        <button type="submit" name="contact"><a href="">Contacter l'administrateur</a></button>
        <button type="submit" name="disconnect"><a href="">Me déconnecter</a></button>
    </form>
<span>
</span>