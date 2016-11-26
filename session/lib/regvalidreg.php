<?
function checkLogin($login){
		if(preg_match('/[\s\)\(\+\-\$\.\\\%\^\?\|\[\]]/',$login)){
		
	}elseif(preg_match('/^[A-Za-z0-9]{8,64}$/',$login)){
		
		
	}else{		
		
	}
}

function checkEmail($email){
		if(preg_match("/[^\w\.@]/i",$email)){
		
	}elseif(preg_match_all('/([a-z-0-9]+\.)*[a-z-0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,6}/',$email)){
		
	}else{		
		
	}
}

function checkPassword($password){
		if(preg_match('/[\s\)\(\+\-\$\.\\\%\^\?\|\[\]]/',$password)){
		
	}elseif(preg_match('/[A-Z]+/',$password)&&preg_match('/[a-z]+/',$password)&&preg_match('/[0-9]+/',$password)&&preg_match('/^.{8,128}$/',$password)){
		
	}else{		
		
	}
}



//$log_file= date("Y-m-d H:i:s")." Недопустимый символ в логине: "."\"".$login."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
//		file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
//		header("Location: ../profile/profile.php");
		
		
		
//$log_file= date("Y-m-d H:i:s")." Логин введен некорректно: "."\"".$login."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
//		file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
//		header("Location: ../profile/profile.php");



//$log_file= date("Y-m-d H:i:s")." Недопустимый символ в email: "."\"".$email."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
//		file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
//		header("Location: ../profile/profile.php");

//$log_file= date("Y-m-d H:i:s")." Email введен некорректно: "."\"".$email."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
	//	file_put_contents("../db/logs/autorization/auth_log.txt", $log_file."\n",FILE_APPEND);
	//	header("Location: ../profile/profile.php");

//$log_file= date("Y-m-d H:i:s")." Недопустимый символ в пароле: "."\"".$password."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
	//	file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
	//	header("Location: ../profile/profile.php");
		
	//$log_file= date("Y-m-d H:i:s")." Пароль введен некорректно: "."\"".$password."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
	//	file_put_contents(".../log/auth.log", $log_file."\n",FILE_APPEND);
	//	header("Location: ../profile/profile.php");
?>

