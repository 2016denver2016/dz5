<?
//Сессии
	session_start();
	//$_SESSION["auth"] = true;
	//var_dump($_SESSION);
	//password_hash
	//password_verify
	//mail("test@gmail.com", "Theme of mail here", "mail message");
?>
<form id="form" name="form" action="session/reg.php" method="post">
	<div id="block">
		<label id="user" for="name">L</label>
		<input type="text" name="email" id="name" placeholder="E-mail" required/>
		<label id="pass" for="password">P</label>
		<input type="password" name="passwd" id="password" placeholder="Пароль" required />
		<input type="submit" id="submit" name="submit" value="a"/>
		<span class="formsp">Регистрация</span>
	</div>
</form>
<form id="form" name="form" action="session/avtorization.php" method="post">
	<div id="block2">
		<label id="user" for="name">L</label>
		<input type="text" name="email" id="name" placeholder="E-mail" required/>
		<label id="pass" for="password">P</label>
		<input type="password" name="passwd" id="password" placeholder="Пароль" required />
		<input type="submit" id="submit" name="submit" value="a"/>
		<span class="formsp">Авторизация</span>
	</div>
</form>

<!--<div class="reg">
<span>Регистрация</span></br>
<form action="session/reg.php" method="POST">
<span>Ведите E-mail</span>
	<input type="email" name="email"></br>
<span>Ведите пароль</span>
	<input type="password" name="passwd"></br>
	<input type="submit" name="send">
</form>
</div>
<div class="avtor">
<span>Авторизация</span></br>
<form action="session/avtorization.php" method="POST">
<span>Ведите E-mail</span>
	<input type="email" name="email"></br>
<span>Ведите пароль</span>
	<input type="password" name="passwd"></br>
	<input type="submit" name="send">
</form>
</div>-->
