<?php
session_start();
include("elements/bdd.php");





    if (isset($_POST['valider'])) {


        if (!empty($_POST['login']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['confpassword'])) {

            @$login = $_POST['login'];
            @$email = $_POST['email'];
            @$password = $_POST['password'];
            $confirmer = $_POST['confpassword'];
            $confirmer = password_hash($confirmer, PASSWORD_BCRYPT);
            $password = password_hash($password, PASSWORD_BCRYPT);

            $login = htmlspecialchars(trim($login));
            $email = htmlspecialchars(trim($email));
            $password = htmlspecialchars(trim($password));

            $stmt = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = '$login'");
            $stmt->execute();
            $loginexist = $stmt->rowCount();
            if ($loginexist == 0) {


                if ($_POST['password'] == $_POST['confpassword']) {

                    $msg = 'Inscription validée';


                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        $stmt = $bdd->prepare("INSERT INTO utilisateurs (login, password, email, id_droits) VALUES ('$login', '$password', '$email', '1')");
                        $stmt->execute();
                    } else {
                        $msg = 'Format mail invalide';
                    }
                } else {
                    $msg = 'Password inccoret';
                }
            } else {
                $msg = 'Login déjà pris';
            }
        } else {
            $msg = 'Remplissez les champs ! ';
        }
    }
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog Inscription</title>
</head>

<body>
    <?php include("elements/header.php"); ?>
    <main class="main2">
        <form class="formulaire2" action="#" method="post">
            <?php if (isset($msg)) {
                ?> <h4 id="msg"> <?php echo $msg ?> </h4>
            <?php } ?>
            <h1>Inscription</h1>

            <div class="input">
                <input type="text" name="login" require placeholder="Nom d'utilisateur" />
                <input type="email" name="email" require placeholder="Email" />
                <input type="password" name="password" require placeholder="Mot de passe" />
                <input type="password" name="confpassword" require placeholder="Mot de passe" />
            </div>

            <p class="inscription">
                J'ai un compte. Je <a href="connexion.php">me connecte !</a>
            </p>
            <div align="center">
                <input type="submit" name="valider" value="Inscription " />
            </div>
        </form>
    </main>
  

    
    <?php include('elements/footer.php'); ?>
</body>

</html>