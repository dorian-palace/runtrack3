<?php
session_start();
include('elements/bdd.php');

try {
if(isset($_GET['id']) AND !empty($_GET['id'])){

$getid = htmlspecialchars($_GET['id']);

$select = $bdd->prepare("SELECT * FROM articles where id = ? ");
$select->execute(array($getid));

$select = $select->fetch();

if(isset($_POST['valider_comm'])){

    if(isset($_POST['commentaire']) AND !empty($_POST['commentaire'])){
    
    $commentaire = $_POST['commentaire'];
    $id_utilisateur= $_SESSION['id'];
    
    $comm = $bdd->prepare("INSERT INTO commentaires(commentaire, id_article, id_utilisateur, date) VALUES ('$commentaire','$getid','$id_utilisateur', NOW())");
    $comm->execute();

    $msg = 'votre commentaire a bien été posté';

        }else{

            $msg = 'veuillez remplir tout les champs';
        }

    }    
    
    $select_comm = $bdd->prepare("SELECT * FROM commentaires INNER JOIN articles ON utilisateurs.id = commentaires.id_utilisateur  WHERE id_article = '$getid'");
    $select_comm->execute();
    $select_comm = $select_comm->fetch();


}
}catch(PDOException $e){
    
    echo 'erreur' .$e->getMessage();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
</head>
    <?php include('elements/header.php');?>
    
    <main class="main2">

    <H2>Article:</H2>

   <?php echo  $select['article'];?>
    <br><br>
    <H4> <?php echo $select_comm['login'].''. ':'. $select_comm['commentaire'].''. ':'.$select_comm['date'];?> </H4>

    <form class="formulaire2" action="#" method="post">


      <h1>Poster un commentaire</h1>

      <?php if (isset($msg)) {
      ?> <h4 id="msg"> <?php echo $msg ?> </h4>
      <?php } ?>

      <?php if (isset($msg2)) {
      ?> <h4 id="msg2"> <?php echo $msg2 ?> </h4>
      <?php } ?>

      <div class="input">
        <textarea name="commentaire" id="text_commentaire" cols="30" rows="10"></textarea>

        <input type="submit" name="valider_comm" value="Poster mon commentaire" />
    
          

        

      </div>
    </form>
</main>
<body>
    
</body>
</html>