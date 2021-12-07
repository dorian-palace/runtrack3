<?php
session_start();
include('elements/bdd.php');

$limite = 5;
$debut = ($page - 1) * $limite;

$categorie_art = $bdd->prepare('SELECT article, id_categorie FROM articles LIMIT :limite OFFSET :debut');
$categorie_art->bindValue('limite', $limite, PDO::PARAM_INT);
$categorie_art->bindValue('debut', $debut, PDO::PARAM_INT);
$categorie_art->execute();



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <?php include('elements/header.php'); ?>

    <?php include('elements/footer.php'); ?>
</body>

</html>