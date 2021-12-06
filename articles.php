<?php 
session_start();
include('elements/bdd.php');

    //articles par 5 + pagination
    $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
    $limite = 5;

    $debut = ($page - 1) * $limite;
    $req = $bdd->prepare("SELECT * FROM articles  INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id LIMIT :limite OFFSET :debut ");
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Articles</title>
</head>
<body>
<?php include('elements/header.php'); ?>


<div class="articles">
    <?php
while ($elements = $req->fetch()) { ?>
        <h4 id="h4articles" ><?php echo  $elements['login'] . ' ' . ':' . $elements['article'] . ' ' . $elements['date']; ?> </h4>   <br />
   <?php } ?>
   </div>
   

   
        <?php
    $result = $bdd->query('SELECT count(id) FROM articles');
    $nbelements = $result->fetchColumn();

    $debut = ($page - 1) * $limite;
    $req = 'SELECT * FROM articles LIMIT :limite OFFSET :debut';
    $req = $bdd->prepare($req);
    $req->bindValue('debut', $debut, PDO::PARAM_INT);
    $req->bindValue('limite', $limite, PDO::PARAM_INT);
    $req->execute();

    $nbpage = ceil($nbelements / $limite); ?>

    <?php
    $page_categorie = (!empty($_GET['categorie']) ? $_GET['categorie'] : 1);
    $req=$bdd->query('SELECT * FROM categories ORDER BY nom');
    $req->execute();?>

    <div class="categories">
    <?php
    while ($elements = $req->fetch()) { ?>
     <a href="http://" target="_blank" rel="noopener noreferrer"> <?php echo  $elements['nom']; ?></a> <br />
    <?php } ?>
    </div>

    <div class="pagination">
    <?php
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
    </div>

<?php include('elements/footer.php'); ?>

</body>
</html>