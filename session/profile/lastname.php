<?
session_start();
$str = file_get_contents("profile.base");
$img = unserialize($str);

$name = ($_POST["name"]);
$phone = ($_POST["phone"]);
$surname = ($_POST["surname"]);
include '../lib/regvalid.php';
//var_dump(checkName($name));
//echo"<br>";
//var_dump(checkPhone($phone));
//echo"<br>";
if (checkName($name) === false){
	$log_file= date("Y-m-d H:i:s")." Не правильно введено имя: "."\"".$name."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
	file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
	header("Location: /dz5/?route=profile");
}elseif (checkPhone($phone) === false){
	$log_file= date("Y-m-d H:i:s")." Не правильно введен номер телефона: "."\"".$phone."\" "."ip-".$_SERVER['REMOTE_ADDR']."host-".$_SERVER['REMOTE_HOST'];
	file_put_contents("../log/auth.log", $log_file."\n",FILE_APPEND);
	header("Location: /dz5/?route=profile");
}else{

//echo"<pre>";
//var_dump($img);
$id = $_SESSION["iduser"];
$img[$id]["name"] = trim(htmlspecialchars(strip_tags($_POST["name"])));
$img[$id]["surname"] = trim(htmlspecialchars(strip_tags($_POST["surname"])));
$img[$id]["phone"] = trim(htmlspecialchars(strip_tags($_POST["phone"])));
//var_dump($id);
//echo"<pre>";
//var_dump($img);
file_put_contents("profile.base" ,serialize($img) ."\n");
header("Location: /dz5/?route=profileuser");
}
?>