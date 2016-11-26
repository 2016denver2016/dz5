<?
session_start();
$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
if (!$dbc){
	echo"Не могу соединиться с сервером MySQL";
	die();
}
//$str = file_get_contents("profile/profile.base");
//$reg = unserialize($str);
$email = trim(htmlspecialchars(strip_tags($_POST["email"])));
$password = trim(htmlspecialchars(strip_tags($_POST["passwd"])));
if(preg_match("/[^\w\.,@]/i",$email)){
	$loglogin1 = date("Y-m-d H:i:s"). " ". "Недопустимый символ в имени пользователя" ." ". $_POST["email"]. "". $_SERVER['REMOTE_ADDR']. "". $_SERVER['REMOTE_HOST'];
	file_put_contents("log/reg.base" ,$loglogin1 ."\n", FILE_APPEND);
	echo "Недопустимый символ в имени пользователя";
}elseif(preg_match_all('/([a-z-0-9]+\.)*[a-z-0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,6}/',$email)){
	$mail = true;
}else{
	$loglogin = date("Y-m-d H:i:s"). " ". "Имя пользователя не соответствет требованиям" ." ". $_POST["email"]. "". $_SERVER['REMOTE_ADDR']. "". $_SERVER['REMOTE_HOST'];
	file_put_contents("log/reg.base" ,$loglogin ."\n", FILE_APPEND);
	echo "Имя пользователя не соответствет требованиям<br>";
}
if(preg_match('/[\s\)\(\+\-\$\.\\\%\^\?\|\[\]]/',$password)){
	$logpasswd1 = date("Y-m-d H:i:s"). " ". "Недопустимый символ в пароле" ." ". $_POST["passwd"]. "". $_SERVER['REMOTE_ADDR']. "". $_SERVER['REMOTE_HOST'];
	file_put_contents("log/reg.base" ,$logpasswd1 ."\n", FILE_APPEND);
	echo "Недопустимый символ в пароле <br>";
}elseif(preg_match('/[A-Z]+/',$password)&&preg_match('/[a-z]+/',$password)&&preg_match('/[0-9]+/',$password)&&preg_match('/^.{8,128}$/',$password)){
	$passw = true;
}else{
	$logpasswd = date("Y-m-d H:i:s"). " ". "Имя пользователя не соответствет требованиям" ." ". $_POST["passwd"]. "". $_SERVER['REMOTE_ADDR']. "". $_SERVER['REMOTE_HOST'];
	file_put_contents("log/reg.base" ,$logpasswd ."\n", FILE_APPEND);
	echo "Пароль недопустим<br>";
}
//if($mail == true && $passw == true){
//	foreach ($reg as $key => $value){
//		if ($_POST["email"] == $value["email"] ){
//			$date = date("Y-m-d H:i:s"). " ". "Имя пользователя уже существует" ." ". $_POST["email"]. "". $_SERVER['REMOTE_ADDR']. "". $_SERVER['REMOTE_HOST'];
//			file_put_contents("log/reg.base" ,$date ."\n", FILE_APPEND);
//			echo "Имя пользователя уже существует";
//			echo "</br>";
//			echo "Введите другое имя пользователя";
//			echo "</br>";
//			$regu = false;
//			break;
		
//		}else{
//			$regu = true;
//		}	
		
//	}
	
//}

	if ($mail == true && $passw == true){
		
		$userlogin = $email;
		$userpasswd = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO `users`(`userlogin`, `userpasswd`)
          VALUES('".$userlogin."','".$userpasswd."')";
		$res = mysqli_query($dbc, $query);
			if (!$res){
				var_dump($query);
			}

			var_dump($res);

mysqli_close($dbc);
		//$reg[] = $reguser;
		//file_put_contents("profile/profile.base" ,serialize($reg) ."\n");
		//$str2 = file_get_contents("profile/profile.base");
		//$iduser = unserialize($str2);
		//echo"<pre>";
		//var_dump($iduser);
		//$regid = count($iduser) - 1;
		//$_SESSION['auth'] = true;
		//$_SESSION["iduser"] = $regid;
		//var_dump($_SESSION); 
		//header("Location: /dz5/?route=profile");
}
//echo "$regid";
//echo "<pre>";
//var_dump($reg);
?>