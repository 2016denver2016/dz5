<?
session_start();
$str = file_get_contents("profile/profile.base");
$avtorize = unserialize($str);
//var_dump($avtorize);
//var_dump($avtorize[0]["passwd"]);
//var_dump(password_verify($_POST["passwd"], $avtorize[0]["passwd"]));
foreach ($avtorize as $key => $value){
	if ($_POST["email"] == $value["email"] && $_POST["passwd"] == password_verify($_POST["passwd"], $value["passwd"])){
		$id = $key;
		$_SESSION["iduser"] = $id;
		
		header("Location: /dz5/?route=profileuser");
		
	}else{
		//header("Location: /dz5/?route=reg");
	}
}

?>