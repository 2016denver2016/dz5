<?
session_start();
	$basket_arr = array();
	$s = 0;
	if ($_COOKIE["basket"] == false) {
		setcookie("basket", serialize($basket_arr), time() + 60*60*48, "/");
		setcookie("summ", $s, time() + 60*60*48, "/");
	}
	
		//include "db/goods.base";
		
		$route = $_GET["route"];
		$basket = $_GET["basket"];
		
		
	
		
  	$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
		if (!$dbc){
			//echo"Не могу соединиться с сервером MySQL";
			die();
		}else{
			//echo"Соединение с сервером MySQL прошло успешно";
			echo"<br>";
		}
//SELECT
//$id = $_GET["id"];
//$id = 20;
	$query = "SELECT * FROM `goods` ;";
	$res = mysqli_query($dbc, $query);
		if (!$res){
			//var_dump($query);
			die();
		}
	$goods = [];
		while($row = mysqli_fetch_assoc($res)){
			$goods[] = $row;
		}
		
		
		$queryFeatchGood = "SELECT * FROM `idgoodsidfeatch` ;";
	$resfeatchgood = mysqli_query($dbc, $queryFeatchGood);
		if (!$resfeatchgood){
			//var_dump($query);
			die();
		}
	  $featchgoods = [];
		while($rowfeatchgood = mysqli_fetch_assoc($resfeatchgood)){
			$featchgoods[] = $rowfeatchgood;
		}
		
		
//echo"<pre>";
//var_dump($goods);

mysqli_close($dbc);
include "view/template.tpl";
?>