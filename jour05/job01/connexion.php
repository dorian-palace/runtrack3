<?php
$var = file_get_contents('php://input');
session_start();
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
    <title>Connexion</title>
</head>

<body>
    <pre><?php var_dump($_SESSION); ?> </pre>

    <main classe="user-main">

        <div class="container-form">
            <?php
            // require_once('app/Users.php');

          

            // var_dump($_POST);

            ?>

            <h1 id="h1-inscription">Connexion</h1>
            <form  method="POST" id="form">


                <label for="login" class="'labelForm" placeholder="Votre nom d'utilisateur">nom d'utilisateur :</label>
                <input type="text" id="nom" name="nom">

                <label for="login" class="'labelForm" placeholder="Votre nom d'utilisateur">prenom d'utilisateur :</label>
                <input type="text" id="prenom" name="prenom">

                <label for="email" class="'labelForm" placeholder="Votre email"> Email </label>
                <input type="email" id="email" name="email">

                <label for="password" class="'labelForm" placeholder="Votre mot de pass">mot de passe :</label>
                <input type="password" id="password" name="password">

                <button type="button" id="button" name="valider" classe='btnFrom'>valider</button>

            </form>
        </div>

    </main>

    <a href="setting/deconnexion.php">Deconnexion</a>

</body>

</html>