<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog','root','');
    $bdd -> setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
}

catch(PDOException $e){

    echo 'echec : ' .$e->getMessage();
}


?>