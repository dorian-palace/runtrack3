<?php
session_start();
?>
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

<?php include('bdd.php'); ?>



        <?php if (!isset($_SESSION['id'])) {
            echo '<a href="inscription.php">Inscription</a>' . ' ' .
                '<a href="connexion.php">Connexion</a>';
        } ?>

        <?php
        if (isset($_SESSION['id'])) {

            echo '<a href="profil.php">Modifier le profil</a>' . ' ';
        }
        ?>

    

    </div>
    </header>


</body>

</html>

SELECT * FROM "table1" as ARR INNER JOIN "table2" as AOP ON ("AOP.col2" = "ARR.col1");

SELECT * FROM "table1" as "ARR" INNER JOIN "table2" as "AOP" ON ("AOP"."col2" = "ARR"."col1");