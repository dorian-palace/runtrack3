<?php
session_start();
include('elements/bdd.php');

//articles par 5 + pagination

if (isset($_GET['page']) && !empty($_GET['page'])) {

    $page = (int) strip_tags($_GET['page']);
} else {

    $page = 1;
}

$limite = 5;
$debut = ($page - 1) * $limite;
$req_article = $bdd->prepare("SELECT * FROM articles  INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id LIMIT :limite OFFSET :debut ");
$req_article->bindValue('debut', $debut, PDO::PARAM_INT);
$req_article->bindValue('limite', $limite, PDO::PARAM_INT);
$req_article->execute();



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
        while ($elements =  $req_article->fetch()) { ?>
            <h4 id="h4articles"><?php echo  $elements['login'] . ' ' . ':' . $elements['article'] . ' ' . $elements['date']; ?> </h4> <br />
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

    //arrondi à l'entier le plus proche, permert d'avoir touchoir un entier
    $nbpage = ceil($nbelements / $limite); ?>

    <?php
    
    if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {

        $get_categorie = $_GET['categorie'];
        $req = $bdd->prepare("SELECT * FROM articles INNER JOIN categories ON categories.id = articles.id_categorie where id_categorie = ?");
        $cat1=$req->execute(array($get_categorie));
        $categorie_elements = $req->fetch();

       
  
       
    ?>
    <div class="categories">
    
    <?php 

        if ($categorie_elements['id_categorie'] == 1){
            echo $categorie_elements['article'];
        }

        if ($categorie_elements['id_categorie'] == 2){
            echo $categorie_elements['article'];
        }


    
}?>
    <a href="?categorie=<?=  1; ?>">cat 1</a>



    <a href="?categorie=<?=  2; ?>">cat 2</a>


    <a href="?categorie=<?=  3; ?>">cat 3</a>

    </div>
    
    <ul class="pagination">



        <li class="page-item">
            <?php if ($page > 1) :
            ?> <a href="?page=<?php echo $page - 1 ?>" class="page-link">
                    </a> <?php
                        endif;


                            ?>

        </li class="page-item">

        <li class="page-item"> <?php
                                for ($i = 1; $i <= $nbpage; $i++) :
                                ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
                                                            endfor; ?>
        </li>

        <li class="page-item"> <?php
                                if ($page < $nbpage) :
                                ?> <a href="?page=<?php echo $page + 1; ?>"> ></a><?php
                                                        endif;
                                                            ?>
        </li>

    </ul>



    <?php include('elements/footer.php'); ?>

</body>

</html>