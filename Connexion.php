<?php
ini_set('display_errors', 'On');
require_once("DataBase.php");
include_once("Interfaces.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Connexion.css">
    <title>Document</title>
</head>
<body>
    <form action="Interfaces.php" method="POST" class="formulaire">
        <h1>Connexion</h1>
        <h4>Votre chauffeur en un clic !</h4>
        <br>
        <button type="submit" class="facebook">Continuer avec facebook</button>
        <br>
        <br>
        <h4></h4>
        <Label>EMAIL</Label>
        <br>
        <br>
        <input type="text" name="email" id="" placeholder="Entre Votre E-mail">
        <br>
        <br>
        <Label>MOT DE PASSE</Label>
        <br>
        <br>
        <input type="password" name="password" id="" placeholder="Entre Votre mot de passe">
        <br>
        <br>
        <div class="aligner">
            <a href="">J'ai deja un compte</a>
            <button type="submit" name="inscrire" class="inscrire">S'inscrire ➡</button>
        </div>
    </form>
</body>
</html>