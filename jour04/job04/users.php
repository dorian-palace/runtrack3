<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04User</title>
</head>
<body>
</body>
</html>
<?php

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=utilisateurs', $user, $pass);
$req = $db->query('SELECT * FROM utilisateurs');
$toArray = array();

var_dump($toArray);

while ($result = $req->fetch()) {

    $toArray[] = $result;

}

echo json_encode($toArray);
$fopen = fopen('users.json', 'w');
fwrite($fopen, json_encode($toArray));
fclose($fopen);



?>