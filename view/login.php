<?php

session_start();

if(isset($_SESSION['monID']) &&
    $_SESSION['monID']=== session_id())
    {
        header("location: ?p=home");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <h1>Please enter your login details in order to continue</h1>
    <h2>Use your initials for User and your last name for PWD</h2>
    <h4>e.g RS and Smith if your name is Robert Smith</h4>
    <p>Veuillez vous connecter</p>
    <?php if(isset($erreur)) echo "<h3>$erreur</h3>" ?>
    <form action="" name="login" method="POST">
        <input type="text" name="login" placeholder="username" required><br>
        <input type="password" name="pwd" placeholder="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
    <?php
    var_dump($_POST,$_SESSION);
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>