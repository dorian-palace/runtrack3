<?php
session_start();
include('elements/bdd.php');

if(isset($_POST['arcticle'])){

    if(!empty($_POST['article'])){

    $article = htmlspecialchars($_POST['article']);
    

    // $inner = $bdd->prepare("SELECT * FROM articles INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur INNER JOIN categories ON articles.id_categorie = categories.id");
    // $inner->execute();
    // $result = $inner->fetch();
    //     (var_dump($result));
        
    $id_categorie = $_POST['categorie'];
    $id_utilisateur = $_SESSION['id'];
    

    $insert->$bdd->prepare("INSERT INTO  articles (article,id_categorie,id_utilisateurs,date)VALUES(?,?,?,NOW()");
    $insert->execute(array($article, $id_categorie, $id_utilisateur));

    }else{

        $msg = 'veuillez remplir tout les champs';
    }
}
var_dump($result);
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
    <?php include('elements/header.php'); ?>

        <form action="" method="post">
        
        <?php if(isset($msg)){ echo $msg;} ?>

        <textarea name="article" placeholder="contenu de l'article" cols="30" rows="10"></textarea>

       <select name="categorie" id="">
        <option value="1">catégorie 1</option>
        <option value="2">catégorie 2</option>
        <option value="1">catégorie 1</option>

       </select>
        <input type="submit"  name ='valider'value="poster l'article">

        
</form>
</body>
</html>