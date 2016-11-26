<?
session_start();
$id = $_SESSION["iduser"];
//var_dump($id);
	$str = file_get_contents("profile.base");
	$img = unserialize($str);
	
	
	
	$name = explode(".", $_FILES["images"]["name"] );
	$name = $name[count($name) - 1];
	
	
	$type = ( $_FILES["images"]["type"] );
	$b = "session/profile/avatar/";
	$a = md5(microtime().uniqid().rand(0,9999));
	$c = ("$b" . "$a" . "." .$name);
	
	$nam = ($_FILES["images"]["name"] );
	
	
	
	
	if ($type == "image/jpeg" && $name == "jpeg" || $type == "image/png" && $name == "png" || $type == "image/jpeg" && $name == "jpg" || $type == "image/jpg" && $name == "jpeg") {
		move_uploaded_file($_FILES["images"]["tmp_name"], "avatar/"."$a".".".$name);
				
	}
	
	//$img[$id]["nameimage"] = $nam;
	$img[$id]["image"] = $c;
	//echo"<pre>";
	//var_dump($img);
	
	//$img["imgGood"] = $imggood;
	
	file_put_contents("profile.base" ,serialize($img) ."\n");
	
	
	header("Location: /dz5/?route=profile");
	//file_get_contents
	//file_put_contents
?>
