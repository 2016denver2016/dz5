<?
$get_basket = unserialize($_COOKIE["basket"]);

	foreach ($get_basket as $key => $value){
	
		unset ($get_basket[$key]);
	
	}

unset($_COOKIE["basket"]);
setcookie("basket", serialize($get_basket), time() + 60*60*48, "/");
header("Location: http://phpdz.com/dz5/?route=basket");
?>