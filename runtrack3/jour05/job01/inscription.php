<?php
session_start();
require_once('app/Users.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="script.js"></script>
    <title>inscription</title>
</head>

<body>
    <?php

    if (isset($_POST['valider'])){

        if (isset($_POST['nom']) && (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confpassword']))) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $confpassword = $_POST['confpassword'];

            $user = new Users($nom, $prenom, $email);

            $user->validInscription();
        }
    }

    ?>
    <div class="container-form">

        <h1 id="h1-inscription">Inscription</h1>
        <form method="post">


            <label for="login" class="'labelForm" placeholder="Votre nom d'utilisateur">nom d'utilisateur :</label>
            <input type="text" class="inputForm" name="nom">

            <label for="login" class="'labelForm" placeholder="Votre nom d'utilisateur">prenom d'utilisateur :</label>
            <input type="text" class="inputForm" name="prenom">

            <label for="email" class="'labelForm" placeholder="Votre email"> Email </label>
            <input type="email" class="inputForm" name="email">

            <label for="password" class="'labelForm" placeholder="Votre mot de pass">mot de passe :</label>
            <input type="password" class="inputForm" name="password">

            <label for="email" class="'labelForm" placeholder="confirmation">confirmez le mot de passe </label>
            <input type="password" class="inputForm" name="confpassword">


            <button type="button" name="valider" classe='btnFrom'>valider</button>

        </form>
    </div>
</body>

</html>