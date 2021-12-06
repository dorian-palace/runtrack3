<?php
session_start();
include('elements/bdd.php');

try{

        if(isset($_POST['valider'])){
        if(!empty($_POST['article'])){
            
        $id_utilisateur = $_SESSION['id'];
        
        $article = $_POST['article'];
        $id_categorie = $_POST['categorie'];
        
        
        $insert_articles = $bdd->prepare("INSERT INTO articles(article,id_categorie,id_utilisateur,date)VALUES(?,?,?,NOW())");
        $insert_articles->execute(array($article,$id_categorie,$id_utilisateur));

    }else{

        $msg = 'veuillez remplir tout les champs';
    }

}
    var_dump($_SESSION);
    





} 



catch(PDOException $e){

    echo 'erreur : ' .$e->getMessage();
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
    <?php include('elements/header.php'); ?>

        <form action="" method="post">
        
        <?php if(isset($msg)){ echo $msg;} ?>


        <textarea name="article" placeholder="contenu de l'article" cols="30" rows="10"></textarea>

       <select name="categorie" >
        <option value="1">catégorie 1</option>
        <option value="2">catégorie 2</option>
        <option value="3">catégorie 3</option>

       </select>
        <input type="submit"  name ='valider'value="poster l'article">

        
</form>
</body>
</html>

