<?php
require_once('setting/db.php');
require_once('app/Users.php');
if (!isset($_SESSION)) {

    session_start();
}

$var = file_get_contents('php://input');

// if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {

//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = new Users($nom, $prenom, $email);

$msg_nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$msg_prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$msg_email = isset($_POST['email']) ? $_POST['email'] : '';
$msg_password = isset($_POST['password']) ? $_POST['password'] : '';

$ok = true;
$msg = array();

if (!isset($msg_nom) || empty($msg_nom)) {
    $ok = false;
    array_push($msg, 'Le champ nom doit etre renseigner !');
    // $msg[] = ;
}

if (!isset($msg_prenom) || empty($msg_prenom)) {
    $ok = false;
    $msg[] = 'Le champ prenom doit etre renseigner !';
}

if (!isset($msg_email) || empty($msg_email)) {
    $ok = false;
    $msg[] = 'L\'email doit etre renseigner !';
}

if (!isset($msg_password) || empty($msg_password)) {
    $ok = false;
    $msg[] = 'Le mot de passe doit etre renseigner !';
}

if ($ok) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new Users($nom, $prenom, $email);
    $user->connect();
}

$log_user = $user->connect();

if ($log_user) {
    $ok = true;
    $msg[] = 'Connexion réussie';
} else {
    $ok = false;
    $msg[] = 'Connexion échoué';
}

echo json_encode(
    // array(
    //     'ok' => $ok,
    //     'msg' => $msg
    // )
    $msg
);
// var_dump($_SESSION);
