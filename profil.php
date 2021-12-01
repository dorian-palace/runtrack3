<?php
session_start();
include("elements/bdd.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <h1></h1>
    <main>
        <form class="formulaire2" action="#" method="post">
            <?php if (isset($msg)) {
                echo $msg;
            } ?>
            <h1>Modifier votre profil</h1>

            <div class="input">
                <input type="text" name="newlogin" require placeholder=" New login" /><br />
                <input type="email" name="newemail" require placeholder="New Email" /><br />
                <input type="password" name="newpassword" require placeholder="New password" /><br />
                <input type="password" name="newconfpassword" require placeholder="New password" /><br />
            </div>

            <div align="center">
                <input type="submit" name="valider" value="Modifier !" />
            </div>
        </form>
        <?php
        @$newpassword = $_POST['newpassword'];
        @$newpassword = password_hash($password, PASSWORD_BCRYPT);
        @$newconfpassword = $_POST['newconfpassword'];

        if (isset($_SESSION['id'])) {
            $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
            $req->execute(array($_SESSION['id']));
            $user = $req->fetch();

            if (isset($_POST['newlogin']) and !empty($_POST['newlogin']) and $_POST['newlogin'] != $user['login']) {
                $newlogin = htmlspecialchars($_POST['newlogin']);
                $insertlogin = $bdd->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
                $insertlogin->execute(array($newlogin, $_SESSION['id']));

                $msg = 'Login modifier';
            }

            if (isset($_POST['newemail']) and !empty($_POST['newemail']) and $_POST['newemail'] != $user['email']) {
                $newlogin = htmlspecialchars($_POST['newemail']);
                $insertlogin = $bdd->prepare("UPDATE utilisateurs SET email = ? WHERE id = ?");
                $insertlogin->execute(array($newlogin, $_SESSION['id']));

                $msg = 'Email modifier';
            }

            if (isset($_POST['newpassword']) and !empty($_POST['newpassword']) and isset($_POST['newconfpassword']) and !empty($_POST['newconfpassword'])) {
                if ($newpassword == $newconfpassword) {
                    $insertpassword = $bdd->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
                    $insertpassword->execute(array($newpassword, $_SESSION['id']));

                    $msg = 'Password modifier';
                }
            }
        }else{
            $msg = 'Vous êtes déconnecter';
        }

        var_dump($_SESSION);
        ?>
    </main>
</body>

</html>