<?
$get_basket = unserialize($_COOKIE["basket"]);
$id = $_GET["id"];
$get_basket[] = $id;
unset($_COOKIE["basket"]);
setcookie("basket", serialize($get_basket), time() + 60*60*48, "/");
header("Location: http://phpdz.com/dz5/?route=basket");
?>