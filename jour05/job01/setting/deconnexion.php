<?php 
session_start(); 
$_SESSION = array();
header("Location: ../connexion.php");
session_destroy();

?>