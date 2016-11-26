<?
//$str = file_get_contents("../../../base/good.base");
//$price = unserialize($str);
$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
if (!$dbc){
	echo"Не могу соединиться с сервером MySQL";
	die();
}
//1sticker
foreach ($_POST as $key => $value){
		switch($key){
			case "superPrice":
			$sticker = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "topSales":
			$sticker = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "stock":
			$sticker = trim(htmlspecialchars(strip_tags($key)));
		break;
		}
}

//загружаем картинку
$name = explode(".", $_FILES["images"]["name"] );
	$name = $name[count($name) - 1];
	$imggood = array();
	
	$type = ( $_FILES["images"]["type"] );
	$b = "images/product/";
	$a = md5(microtime().uniqid().rand(0,9999));
	$pathfile = trim(htmlspecialchars(strip_tags("$b" . "$a" . "." .$name)));
	
	$nam = ($_FILES["images"]["name"] );
	
	
	
	
	if ($type == "image/jpeg" && $name == "jpeg" || $type == "image/png" && $name == "png" || $type == "image/jpeg" && $name == "jpg" || $type == "image/jpg" && $name == "jpeg") {
		move_uploaded_file($_FILES["images"]["tmp_name"], "../../../images/product/"."$a".".".$name);
				
	}
	
	//$imggood[] = $nam;
	//$imggood[] = $c;
	
	//$img["imgGood"] = $imggood;
	//var_dump($pathfile);



//2in_stock
	if ($_POST["ending"] === "no"){
			$in_stock = "1";
	}else{
		$in_stock = "0";
	}
//3old_price
$oldPrice = trim(htmlspecialchars(strip_tags($_POST["oldprice"])));
	//if(ctype_digit($oldPrice)){

		//}else{
		//	header("Location: /dz5/?route=addgoods");
		//	die();
		//}
//4price
$price = trim(htmlspecialchars(strip_tags($_POST["price"])));
	if(iconv_strlen($price) !==0 && ctype_digit($price)){

		}else{
			header("Location: /dz5/?route=addgoods");
			die();
		}
//5name
$name = trim(htmlspecialchars(strip_tags($_POST["name"])));
if( iconv_strlen($name) == 0 )
 {
  header("Location: /dz5/?route=addgoods");
  die();
 }
 //6video
$video = trim(htmlspecialchars(strip_tags($_POST["video"])));
//7demo
$demo = trim(htmlspecialchars(strip_tags($_POST["demo"])));
//8raiting
$raiting = trim(htmlspecialchars(strip_tags($_POST["rait"])));

foreach ($_POST as $key => $value){
		switch($key){
		
			case "black":
			$black = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "red":
			$red = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "white":
			$white = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "blue":
			$blue = trim(htmlspecialchars(strip_tags($key)));
		break;
		}
		
	}
	foreach ($_POST as $key => $value){
		switch($key){
			case "3G":
			$threG = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "4cor":
			$forCore = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "8core":
			$aitCore = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "ips":
			$ips = trim(htmlspecialchars(strip_tags($key)));
		break;
			case "credit":
			$credit = trim(htmlspecialchars(strip_tags($key)));
		break;
		}
		
	}


//9description
$public = trim(htmlspecialchars(strip_tags($_POST["select"])));
$description = trim(htmlspecialchars(strip_tags($_POST["fullname"])));
$builder = trim(htmlspecialchars(strip_tags($_POST["buildergood"])));
//Заливаем товар
$query = "INSERT INTO `goods`(`name`, `demo`, `video`, `price`, `old_price`, `description`, `sticker`, `raiting`, `in_stock`, `public`, `builder`)
          VALUES('".$name."','".$demo."','".$video."','".$price."','".$oldPrice."','".$description."','".$sticker."','".$raiting."','".$in_stock."','".$public."','".$builder."')";
$res = mysqli_query($dbc, $query);
$id_good = (mysqli_insert_id($dbc));
if (!$res){
	var_dump($query);
}

//var_dump($res);
//var_dump($id_good);

//Заливаем фичи
//$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
//if (!$dbc){
//	echo"Не могу соединиться с сервером MySQL";
//	die();
//}

$queryfeatch = "INSERT INTO `idfeatch`(`red_color`, `blue_color`, `blac_color`, `white_color`, `threg`, `forcore`, `aitcore`, `ips`, `credit`)
				VALUES('".$red."','".$blue."','".$black."','".$white."','".$threG."','".$forCore."','".$aitCore."','".$ips."','".$credit."')";
$resfeatch = mysqli_query($dbc, $queryfeatch);
$id_featch = (mysqli_insert_id($dbc));
if (!$resfeatch){
	var_dump($queryfeatch);
}

//var_dump($resfeatch);
//var_dump($id_featch);


//Формируем таблицу idgoodsidfeatch
//$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
//if (!$dbc){
//	echo"Не могу соединиться с сервером MySQL";
//	die();
//}

$queryimg = "INSERT INTO `idimg`(`img_front`)
					VALUES('".$pathfile."')";
$resimg = mysqli_query($dbc, $queryimg);
$id_img = (mysqli_insert_id($dbc));
if (!$resimg){
	var_dump($queryimg);
}

//var_dump($resimg);

$queryimggood = "INSERT INTO `idgoodidimg`(`id_good`, `id_img`)
					VALUES('".$id_good."','".$id_img."')";
$resimggood = mysqli_query($dbc, $queryimggood);

if (!$resimggood){
	var_dump($queryimggood);
}

//var_dump($resimggood);


$queryfeatchgood = "INSERT INTO `idgoodsidfeatch`(`id_good`, `id_featch`)
					VALUES('".$id_good."','".$id_featch."')";
$resfeatchgood = mysqli_query($dbc, $queryfeatchgood);

if (!$resfeatchgood){
	var_dump($queryfeatchgood);
}

//var_dump($resfeatchgood);



mysqli_close($dbc);
header("Location: ../../../index.php");

?>