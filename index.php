<?php
ini_set('display_errors', 'On');
require_once('DataBase.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscripiton</title>
</head>

<body>
    <form action="ClassUser.php" method="POST" class="formulaire">
        <h1>Bienvenue</h1>
        <h4>Finaliser votre inscription en renseignant les champs manqunates</h4>
        <br>
        <div class="test">
            <div>
                <Label>PRENOM</Label>
                <br>
                <br>
                <input type="text" name="prenom" id="" placeholder="Entre Votre Prenom">
            </div>
            <div id="nom">
                <Label>NOM</Label>
                <br>
                <br>
                <input type="text" name="nom" placeholder="Entre Votre Nom">
            </div>
        </div>

        <br>
        <br>
        <div>
            <Label>TELEPHONE</Label>
            <br>
            <input type="text" name="telephone" id="tel" placeholder="Entrer Votre N° Telephone">
        </div>
        <br>
        <br>
        <div>
            <Label>EMAIL</Label>
            <br>
            <input type="text" name="email" id="email" placeholder="Entrer Votre E-Mail">
        </div>
        <br>
        <br>
        <div>
            <Label>PASSWORD</Label>
            <br>
            <input type="password" name="password" id="mdp" placeholder="Entrer Votre Mot de passe">
        </div>
        <br>
        <br>
        <a href="">Ajouter un code promo</a>
        <br>
        <br>
        <button type="submit" name="inscrire" class="inscrire">S'inscrire ➡</button>

    </form>
</body>

</html>