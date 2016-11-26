<?
	
	// $userName = $_GET["userNameForm"];
	
	$userName = trim(htmlspecialchars(strip_tags($_GET["userNameForm"])));
	$userNameF = trim(htmlspecialchars(strip_tags($_GET["userSecondNameForm"])));

	setcookie("userName", $userName, 0, "/");
	setcookie("userNameF", $userNameF, 0, "/");

	header("Location: ../../index.php");
	die();	
?>
