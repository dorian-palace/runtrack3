
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header class="nav">
        <nav>
            <ul>
            <li><a href="#">Accueil</a></li>
            <?php if (!isset($_SESSION['id'])) {
                ?>

                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
        
               <?php } ?>
                <li><a href="inscription.php">modifier profil </a></li>
                <li class="menu-deroulant">
                    <a href="#">Services</a>
                    <ul class="sous-menu">
                        <li><a href="#">Graphisme</a></li>
                        <li><a href="#">Web & App</a></li>
                        <li><a href="#">Marketing</a></li>
                    </ul>
                </li>
                <li class="menu-deroulant">
                    <a href="#">Réalisations</a>
                    <ul class="sous-menu">
                        <li><a href="#">SpaceX</a></li>
                        <li><a href="#">Codeur.com</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </header>




    
    
    



    </div>
    </header>


</body>

</html>