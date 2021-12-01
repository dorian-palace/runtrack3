<?php
session_start();
include('header.php');

?>

<main class="main2">
        <form class="formulaire2" action="#" method="post">
          <h1>Se connecter</h1>
      
          <div class="input">
            <input type="text" name="login" require placeholder="Nom d'utilisateur" />
            <input type="password" name="password"require placeholder="Mot de passe"/>
          </div>
      
          <p class="inscription">
            Je n'est pas de compte. J'en <a href="connexion.php">céer un</a>
          </p>
          <div align="center">
            <input type="submit" name="valider" value="Se connecter" />
          </div>
        </form>
      </main>