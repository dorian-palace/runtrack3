<?php
session_start();
include('elements/bdd.php');
?>



<?php
$user = $bdd->query("SELECT * FROM utilisateurs ORDER BY id DESC");

if (isset($_GET['supprime']) and !empty($_GET['supprime'])) {
    $supprime = (int) $_GET['supprime'];

    $req = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ? ');
    $req->execute(array($supprime));
}
?>

<?php


if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id = htmlspecialchars($_GET['id']);
    $articles = $bdd->query('SELECT * FROM articles WHERE id = ? ');
    $articles->execute(array($get_id));

    if($articles->rowCount() == 1) {
        $articles = $articles->fetch();
        $titre = $articles['article'];
    }else{
        die('Cet article existe pas');
    }
    
} else{
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <main>
        <h1>Administrateur</h1>
        <div class="modif_user">
            <ul>
                <h2>Modification utilisateurs</h2>
                <?php while ($m = $user->fetch()) { ?>

                    <li> <?= $m['id'] ?> : <?= $m['login'] ?> : <?= $m['email'] ?> : <?= $m['id_droits'] ?> - <a href="admin.php?supprime=<?= $m['id'] ?>">Supprimer</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="sup_article">
            <ul>
                <?php while($a = $articles->fetch()){ ?>
                <li><a href="admin.php?id=<?= $a['id']?>">Modifier l'article</a></li>
                <?php } ?>
            </ul>
        </div>

    </main>
</body>

</html>