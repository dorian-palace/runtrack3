<?php
if (!isset($_SESSION)) {
    session_start();
}
$var = file_get_contents('php://input');
require_once('app/User.php');
$upLogin = $_POST['up_login'];
$ingLogin = $_POST['in_login'];
$user = new User();
$user->confSignUp($upLogin);
$user->signIn($ingLogin);
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

// $msg = [];
// $ok = true;
// if (isset($_SESSION)) {
//     $ok = true;
//     $msg = "Bienvenue " . $_SESSION['login'];
// }
// $res = ['msg' => $msg];
// echo json_encode();
