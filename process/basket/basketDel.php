<?
$get_basket = unserialize($_COOKIE["basket"]);
$id = $_GET["id"];

foreach ($get_basket as $key => $value){
	if($value == $id){
		unset ($get_basket[$key]);
	}
}
$get_basket = array_values($get_basket);
unset($_COOKIE["basket"]);
setcookie("basket", serialize($get_basket), time() + 60*60*48, "/");
header("Location: http://phpdz.com/dz5/?route=basket");

?>
