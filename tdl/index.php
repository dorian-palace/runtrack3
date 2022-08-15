
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="module.js"></script>
    <script src="log.js"></script>
    <title>Document</title>
</head>
<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: todolist.php');
}
?>
<body>
    <header></header>
    <main>
        <h1 class="h1_index">To Do List</h1>
        <div class="container_form1">
            <form action="" method="post" class="form_inscription" id="form_inscription">
                <h2>inscription</h2>
                <input type="text" placeholder="login" name="up_login" id="up_login">
                <input type="password" placeholder="password" name="up_password" id="up_password">
                <input type="password" placeholder="password" name="up_conf" id="up_conf">
                <button type="submit" name="submitUp" id="submit">Inscription</button>
                <!-- <input type="submit" id="submit"> -->
            </form>


        </div>
        <form action="" method="post" class="form_connexion" id="form_connexion" name="form_connexion">
            <h2>Connexion</h2>
            <span class="error" id="errorName"></span>
            <span class="error" id="errorPassword"></span>
            <input type="text" placeholder="login" name="in_login" id="in_login">
            <input type="password" placeholder="password" name="in_password" id="in_password">
            <button type="submit" id="in_submit" name="in_submit">Connexion</button>
        </form>
    </main>





</body>

</html>