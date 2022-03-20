<?php
$var = file_get_contents('php://input');

var_dump($_POST);
if(!isset($_SESSION)){
    
    session_start();
}
require_once('setting/db.php');
require_once('app/Users.php');
// $db = new DB_connet();
// $db->return_db();
// $user = new Users($nom, $prenom, $email);
// $user->connect();
var_dump($_SESSION);

    
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = new Users($nom, $prenom, $email);
        $user->connect();
        var_dump($_SESSION);
        var_dump('EZEFDTFBFAZD');
    }

