<?php
session_start();
include('elements/bdd.php');

try {

    if(!isset($_SESSION['id'])){

        header('Location: connexion.php');
        exit();
    }

    if (isset($_SESSION['id'])) {



        $insert = $bdd->prepare("SELECT * FROM utilisateurs where id = ? ");
        $insert->execute(array($_SESSION['id']));
        $insert->execute();
        $userinfo = $insert->fetch();

        if (isset($_POST['newlogin']) and !empty($_POST['newlogin'] and $_POST['newlogin'] != $userinfo['login'])) {

            $newlogin = htmlspecialchars((trim($_POST['newlogin'])));

            $inserlogin = $bdd->prepare("UPDATE utilisateurs SET login = ?  WHERE id = ?");
            $inserlogin->execute(array($newlogin, $_SESSION['id']));

            $msg = 'Nom d\'utilisateur modifié';

            
        }

        if (isset($_POST['newemail']) and !empty($_POST['newemail']) and $_POST['newemail'] != $userinfo['email']) {

            $newemail = htmlspecialchars(trim($_POST['newemail']));
            
            
            $insertmail = $bdd->prepare('UPDATE utilisateurs SET email = ? WHERE id=?');
            $insertmail->execute(array($newemail, $_SESSION['id']));
            
            $msg = 'email modifié';
        } else{
            $msh = 'email invalide';
        }   

        if (isset($_POST['newmdp ']) and !empty('newmdp') and isset($_POST['newmdp2']) and !empty($_POST['newmdp'])) {

            $newmdp = $_POST['newmdp'];
            $newmdp2 = $_POST['newmdp2'];
            $newmdp = password_hash($newmdp, PASSWORD_BCRYPT);
            $newmdp2 = password_hash($newmdp2, PASSWORD_BCRYPT);

            if ($newmdp == $newmpd2) {

                $insertmdp = $bdd->prepare('UPDATE utilisateur SET password=? WHERE id=?');
                $insertmdp->execute(array($newmdp, $_SESSION['id']));

                $msg = 'Mot de passe modifié';
            }
        }else{
            $msh = 'Mot de passe incorrect';
        }   
    } 
} catch (PDOException $e) {

    echo 'echec :' . $e->getMessage();
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('elements/header.php') ?>

    <main class="main2">



        <form classe="Formulaire2" action="#" method="post">

            <?php if(isset($msg)){echo $msg;}?>

            <h2>Modification de mon profil</h2>

            <div class="input">

                <input type="text" name="newlogin" placeholder="nom d'utilisateur" value="<?php echo $userinfo['login'] ?>">
                <input type="email" name='newemail' placeholder="email" value="<?php echo $userinfo['email'] ?>">
                <input classe="input-profil" type="password" name='newmdp' placeholder="mot de passe">
                <input classe="input-profil" type="password" name='newmdp2' placeholder="Confirmer le   mot de passe">


            </div>

            <div class="modifier">
                <input id='modifier' type="submit" value="Modifier">
                
            </div>
        </form>

        <form action="deconnexion.php" id="deco">
            <input type="submit" ' value="Se deconnecter"/>
        </form>

    </main>

        <?php include('elements/footer.php');?>
</body>

</html>