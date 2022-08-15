<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>

<body>
    <form action="#" method="post" id="form" enctype="multipart/form-data">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="file" id="image" id="file" name="file">
        <input type="submit" id="submit" name="submit">
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</body>

</html>
<?php
session_start();

try {

    $username = "root";
    $password = "root";

    $db = new PDO('mysql:host=localhost;dbname=test', $username, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {

    echo 'erreur : ' . $e->getMessage();
}

if (isset($_POST['submit'])) {
    $nom_image = $_POST['nom'];
    echo 'ok1';

    if (isset($_FILES['file'])) {
        echo 'ok2';
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        $error = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];
        move_uploaded_file($tmpName, './file/' . $name);
        //move_uploaded_file — Déplace un fichier téléchargé
        $tabExtension = explode('.', $name);
        //Scinde une chaîne de caractères en segments
        $extension = strtolower(end($tabExtension));
        //end — Positionne le pointeur de tableau en fin de tableau
        $extensions = ['jpg', 'png', 'jpeg'];
        $maxSize = 400000;

        if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
            echo 'ok3';

            $uniqueName = uniqid('', true);
            //uniqid — Génère un identifiant unique
            $file = $uniqueName . "." . $extension;
            move_uploaded_file($tmpName, './file/' . $name);

            $req = "INSERT INTO test('name', 'image') VALUES ('?,?')";
            $stmt = $db->prepare($req);
            $stmt->execute(array(
                $nom_image, $name
            ));
        } else {
            $msg = 'Veuillez remplir les champs';
        }
    }
}

$req_image = 'SELECT * FROM test';
$query = $db->query($req_image);
while($result = $query->fetch()){
    echo '<img src="file/' . $result['image'] . '" height=250 width=400 />';
    var_dump($result);
}


?>