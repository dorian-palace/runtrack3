<?php
session_start();
include('elements/bdd.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php include('elements/header.php'); ?>

  <main class="main2">
    <form class="formulaire2" action="#" method="post">


      <h1>Se connecter</h1>

      <?php if (isset($msg)) {
        echo $msg;
      } ?>

      <div class="input">
        <input type="text" name="login" require placeholder="Nom d'utilisateur" />
        <input type="password" name="password" require placeholder="Mot de passe" />
      </div>

      <p class="inscription">
        Je n'est pas de compte. J'en <a href="connexion.php">céer un</a>
      </p>
      <div align="center">
        <input type="submit" name="valider" value="Se connecter" />
      </div>
    </form>

  </main>

  <div class="connecter">

    <H1><?php if (isset($userinfo['id'])) {

          echo 'bienvenu' .  $unserinfo['login'];
        } ?> </H1>
  </div>
</body>

</html>

<?php

try {

  $login = $_POST['login'];
  $password = $_POST['password'];

  if (isset($_POST['login']) and isset($_POST['password'])) {

    if (!empty($_POST['login']) and !empty($_POST['password'])) {

      $insert = $bdd->prepare("SELECT * FROM utilisateurs where login = '$login' ");
      $insert->execute();
      $userinfo = $insert->fetch();

      $_POST['login'] = $userinfo['login'];
      var_dump($userinfo);

      if (password_verify($_POST['password'], $userinfo['password'])) {

        $msg = 'vous êtes connecté';

      } else {

        $msg =  'identifiant ou mot de pass incorrect';
      }
    }
  }
} catch (PDOException $e) {

  echo 'echec : ' . $e->getMessage();
}
