<?php
session_start();
include('elements/bdd.php');
?>
<?php
//$req = $bdd->prepare("SELECT * FROM articles INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur INNER JOIN categories ON articles.id_categorie = categories.id  ORDER BY date DESC LIMIT 5");
//$articles = $req->execute();
?>

<div class="articles_5">
    <?php /*
    $limite = 5;

    $req = $bdd->prepare("SELECT * FROM articles LIMIT :limite ");
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    // Le marqueur est nommé « limite » il doit prendre la valeur de la variable $limite cette valeur est de type entier
    $req->execute();

    //while ($articles = $req->fetch()) {
    //echo $articles['nom'] . $articles['article'] . '<br/>' . '<br/>';
    //}

    while ($element = $req->fetch()) {
        echo $element['article'] . '<br/>';
    } */
    ?>
</div>

<h1>Article</h1>

<div class="pagination_suivant">
    <?php
    $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
    $limite = 5;

    $debut = ($page - 1) * $limite;
    $req = $bdd->prepare("SELECT * FROM articles  INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id LIMIT :limite OFFSET :debut ");
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    while ($elements = $req->fetch()) {
        echo  $elements['login']. ' '. ':'.$elements['article'].   '<br />';
    }
    ?>
    <?php

$resultFoundRows = $bdd->query('SELECT count(id) FROM articles');
/* On doit extraire le nombre du jeu de résultat */
$nombredElementsTotal = $resultFoundRows->fetchColumn();

$debut = ($page - 1) * $limite;
/* Cette requête ne change pas */
$req = 'SELECT * FROM articles LIMIT :limite OFFSET :debut';
$req = $bdd->prepare($req);
$req->bindValue('debut', $debut, PDO::PARAM_INT);
$req->bindValue('limite', $limite, PDO::PARAM_INT);
$req->execute();

$nombreDePages = ceil($nombredElementsTotal / $limite);

/* Si on est sur la première page, on n'a pas besoin d'afficher de lien
 * vers la précédente. On va donc ne l'afficher que si on est sur une autre
 * page que la première */
if ($page > 1):
    ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
endif;

/* On va effectuer une boucle autant de fois que l'on a de pages */
for ($i = 1; $i <= $nombreDePages; $i++):
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor;

/* Avec le nombre total de pages, on peut aussi masquer le lien
 * vers la page suivante quand on est sur la dernière */
if ($page < $nombreDePages):
    ?>— <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
endif;
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

</body>

</html>