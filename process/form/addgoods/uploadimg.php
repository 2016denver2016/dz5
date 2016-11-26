<?
	$str = file_get_contents("../../../base/good.base");
	$img = unserialize($str);
	
	
	
	$name = explode(".", $_FILES["images"]["name"] );
	$name = $name[count($name) - 1];
	$imggood = array();
	
	$type = ( $_FILES["images"]["type"] );
	$b = "images/product/";
	$a = md5(microtime().uniqid().rand(0,9999));
	$c = ("$b" . "$a" . "." .$name);
	
	$nam = ($_FILES["images"]["name"] );
	
	
	
	
	if ($type == "image/jpeg" && $name == "jpeg" || $type == "image/png" && $name == "png" || $type == "image/jpeg" && $name == "jpg" || $type == "image/jpg" && $name == "jpeg") {
		move_uploaded_file($_FILES["images"]["tmp_name"], "../../../images/product/"."$a".".".$name);
				
	}
	
	$imggood[] = $nam;
	$imggood[] = $c;
	
	$img["imgGood"] = $imggood;
	
	file_put_contents("../../../base/good.base" ,serialize($img) ."\n");
	
	
	header("Location: form.php");
	//file_get_contents
	//file_put_contents
?>
