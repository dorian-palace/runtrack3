<?php
session_start();
include('elements/bdd.php');
?>
<?php
//$req = $bdd->prepare("SELECT * FROM articles INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur INNER JOIN categories ON articles.id_categorie = categories.id  ORDER BY date DESC LIMIT 5");
//$articles = $req->execute();
?>

<h2>articles / 5</h2>
<div class="pagination_suivant">
    <?php
    //articles par 5 + pagination
    $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
    $limite = 5;

    $debut = ($page - 1) * $limite;
    $req = $bdd->prepare("SELECT * FROM articles  INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id LIMIT :limite OFFSET :debut ");
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    while ($elements = $req->fetch()) {
        echo  $elements['login'] . ' ' . ':' . $elements['article'] . ' ' . $elements['date'] .   '<br />';
    }
    ?>
    <?php

    $result = $bdd->query('SELECT count(id) FROM articles');
    $nbelements = $result->fetchColumn();

    $debut = ($page - 1) * $limite;
    $req = 'SELECT * FROM articles LIMIT :limite OFFSET :debut';
    $req = $bdd->prepare($req);
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    $nbpage = ceil($nbelements / $limite);


    if ($page > 1) :
    ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
    endif;

    for ($i = 1; $i <= $nbpage; $i++) :
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
    endfor;


    if ($page < $nbpage) :
    ?>— <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
    endif;
    ?>

    <br /> <br />
    <br />
    <br />

    <h2>categorie / 5</h2>
    <?php
    //Articles par catégorie 

    //categorie par 5 + pagination
    $page_categorie = (!empty($_GET['categorie']) ? $_GET['categorie'] : 1);
    $limite = 5;

    $debut = ($page_categorie - 1) * $limite;
    $req = $bdd->prepare("SELECT * FROM articles INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur INNER JOIN categories ON articles.id_categorie = categories.id  ORDER BY  date DESC LIMIT 5 ");
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    while ($elements = $req->fetch()) {
        echo  $elements['login'] . ' ' . ':' . $elements['article'] . ' ' . $elements['date'] . ' ' . $elements['id_categorie'] .  ' ' . $elements['nom'] .  '<br />';
    }


    $result = $bdd->query('SELECT count(id) FROM categories');
    $nbelements = $result->fetchColumn();

    $debut = ($page - 1) * $limite;
    $req = 'SELECT * FROM categories LIMIT :limite OFFSET :debut';
    $req = $bdd->prepare($req);
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    $nbpage = ceil($nbelements / $limite); //ceil — Arrondit au nombre supérieur


    if ($page > 1) :
    ?><a href="?categorie=<?php echo $page - 1; ?>">Page précédente</a> — <?php
    endif;

    for ($i = 1; $i <= $nbpage; $i++) :
    ?><a href="?categorie=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
    endfor;


    if ($page < $nbpage) :
    ?>— <a href="?categorie=<?php echo $page + 1; ?>">Page suivante</a><?php
    endif;
    ?>
<br /> <br /> <br />
<?php
//Link / catégories <a>
$page_categorie = (!empty($_GET['categorie']) ? $_GET['categorie'] : 1);
$limite = 5;

$debut = ($page_categorie - 1) * $limite;
$req=$bdd->query('SELECT * FROM categories ORDER BY nom');
$req->bindValue('debut', $debut, PDO::PARAM_INT);
$req->bindValue('limite', $limite, PDO::PARAM_INT);
$req->execute();

while ($elements = $req->fetch()) {
    echo  $elements['id'] . ' ' . ':' . $elements['nom'] .  '<br />';
}

?>
</div>
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