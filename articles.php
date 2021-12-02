<?php
session_start();
include('elements/bdd.php');
?>
<?php
//$req = $bdd->prepare("SELECT * FROM articles INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur INNER JOIN categories ON articles.id_categorie = categories.id");



$req = $bdd->prepare('SELECT * FROM articles WHERE id = 1');
$article = $req->execute();

while ($article = $req->fetch()) {
    echo $article['articles'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <ul>
        <li></li>
    </ul>
</body>

</html>