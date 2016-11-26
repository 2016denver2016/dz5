<?
	if ($_COOKIE["userName"] && $_COOKIE["userNameF"]) {
		echo "Hello ". $_COOKIE["userName"] . $_COOKIE["userNameF"];
	}else{
?>
		<form class="fdg" action="process/basket/processForm.php">
		<input type="text" maxlength="10" name="userNameForm" /><br />
		<input type="text" name="userSecondNameForm" /><br />
		<input type="submit">
		</form>
<?
	}
?>