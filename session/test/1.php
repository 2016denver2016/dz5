<?
session_start();
$_SESSION["iduser"] = 123;
//var_dump($_SESSION);
header("Location: 2.php");
?>