<div id="w">
<form enctype="multipart/form-data" id="contactform" action="process/form/addgoods/price.php" method="POST">
<!--<form action="video.php" method="POST">-->
<p class="note"><span class="req">*<span>Загрузите изображение товара</span></p>
<div class="row">

	<input type="file" name="images"></br>
</div>
 <p class="note"><span class="req">*</span> Поля со звездочкой обязательны для заполнения</p>
<div class="row">
	<label for="video">Ведите ссылку на видео <span class="req">*</span></label>
	<input type="text" id="video" class="txt" name="video"></br>
</div>

<div class="row">
	<label for="demo">Ведите ссылку на демо <span class="req">*</span></label>
	<input type="text" id="demo" class="txt" name="demo"></br>
</div>
<p class="note"><span class="req">Выберите одну из трех позиций *</span></br></p>
	<p><input type="radio" name="superPrice" value="Суперцена" > Суперцена</p>
	<p><input type="radio" name="topSales" value="Топ продаж" >Топ продаж</p>
	<p><input type="radio" name="stock" value="Акция" > Акция</p>
<p class="note"><span class="req">Выберите цвета товара которые есть в наличии</span></br></p>
	<p><input type="checkbox" name="white" value="white"> white</p>
	<p><input type="checkbox" name="black" value="black"> black</p>
	<p><input type="checkbox" name="blue" value="blue"> blue</p>
	<p><input type="checkbox" name="red" value="red"> red</p>
<span class="req">Выберите цвета товара которые есть в наличии</span></br></p>
	<p><input type="checkbox" name="3G" value="1516.png"> Поддержка 3G</p>
	<p><input type="checkbox" name="4cor" value="2675.png"> 4 ядра</p>
	<p><input type="checkbox" name="8core" value="2655.png"> 8 ядер</p>
	<p><input type="checkbox" name="ips" value="2635.png"> IPS матрица</p>
	<p><input type="checkbox" name="credit" value="12073.jpg"> Безпроцентный кредит</p>

<!--Стикер-->
<div class="row">
	<label for="named">Ведите полное имя товара<span class="req">*</span></label>
	<input type="text" id="named" class="txt" name="name"></br>
</div>
<p class="note"><span class="req">Выберите одну из двух позиций *</span></br></p>
	<p><input type="radio" name="ending" value="yes" > Товар закнчивается</p>
	<p><input type="radio" name="ending" value="no" >Товар не закнчивается</p>

<div class="row">
	<label for="price">Введите новую цену<span class="req">*</span></label>
	<input type="text" id="price" class="txt" name="price"></br>
</div>

<div class="row">
	<label for="oldprice">Введите старую цену<span class="req">*</span></label>
	<input type="text" id="oldprice" class="txt" name="oldprice"></br>
</div>

<div class="row">
	<label for="raiting">Выберите рейтинг товара<span class="req">*</span></label>
	<input type="number" id="raiting" class="txt" name="rait"></br>
	</div>

<div class="row">
	<label for="text">Ведите полное описание товара<span class="req">*</span></label>
	<input type="text" id="text" class="txt" name="fullname"></br>
</div>
<div class="row">
	<label for="builder">Производитель товара<span class="req">*</span></label>
	<input type="text" id="builder" class="txt" name="buildergood"></br>
</div>
<div class="row">
	<label for="public">Опубликовать товар ?<span class="req">*</span></label>
	<select name="publicgood" id="public" class="txt" size="2" multiple>
    <option selected value="yes">Да</option>
    <option value="no">Нет</option>
 </select>
 </div>

	<div class="center">
        <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Отправить">
      </div>
</form>
<div>

