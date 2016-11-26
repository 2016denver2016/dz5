<?
session_start();
//session_start();
$id = $_SESSION["iduser"];
var_dump($id);
//$str = file_get_contents("profile/profile.base");
//$reg = unserialize($str);
//echo"<pre>";
//var_dump($reg);
?>
<div id="w">
    
    <form id="contactform" name="contact" method="post" action="session/profile/lastname.php">
      <p class="note"><span class="req">*</span> Поля со звездочкой обязательны для заполнения</p>
      <div class="row">
        <label for="name">Ваше Имя <span class="req">*</span></label>
        <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Ваше Имя" required>
      </div>
	  
      <div class="row">
        <label for="email">Ваша фамилия <span class="req">*</span></label>
        <input type="text" name="surname" id="email" class="txt" tabindex="2" placeholder="Ваша фамилия" required>
      </div>
      
      <div class="row">
        <label for="subject">Номер телефона <span class="req">*</span></label>
        <input type="number" name="phone" id="subject" class="txt" tabindex="3" placeholder="Номер телефона" required>
      </div>
      
            
      <div class="center">
        <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Отправить">
      </div>
    </form>
  </div>

 <div class="ws">
	<form enctype="multipart/form-data" action="session/profile/uploadimg.php" method="POST">
	<span>Загрузите аватар</span>
	<input type="file" name="images"></br>
	<input type="submit" name="send">
	</form>
</div>
<!--<form action="lastname.php" method="POST">
<span><h3>* Ведите имя</h3></span>
	<input type="text" name="name"></br>
<span><h3>* Ведите фамилию</h3></span>
	<input type="text" name="surname"></br>
<span><h3>* Ведите телефон</h3></span>
	<input type="number" name="phone"></br>
	<input type="submit" name="send">
</form>-->