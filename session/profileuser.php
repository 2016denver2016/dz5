<?
session_start();
$str = file_get_contents("session/profile/profile.base");
$img = unserialize($str);
$id = $_SESSION["iduser"];
//var_dump($id);
//echo"<pre>";
//var_dump($img);
?>
<div class="profileuser">
<img  class="profileimg" src="<?=$img["$id"]["image"]?>" alt="Демо"></br>
<span><?=$img["$id"]["name"]?></span></br>
<span><?=$img["$id"]["surname"]?></span></br>
<span><?=$img["$id"]["phone"]?></span></br>
<span><?=$img["$id"]["email"]?></span></br>

<a class="reg1" href="/dz5/?route=profile">Редактировать профиль</a>