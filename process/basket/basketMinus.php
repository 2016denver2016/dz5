<?
$get_basket = unserialize($_COOKIE["basket"]);
$id = $_GET["id"];
$get_basket = array_reverse($get_basket,true);
		foreach ($get_basket as $key => $value){
			if($value === $id){
			unset ($get_basket[$key]);
			
		}else{
			continue;
		}
		break;
		}
$get_basket = array_reverse($get_basket,true);
$get_basket = array_values($get_basket);
unset($_COOKIE["basket"]);
setcookie("basket", serialize($get_basket), time() + 60*60*48, "/");
header("Location: http://phpdz.com/dz5/?route=basket");

?>