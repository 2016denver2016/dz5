<?
$get_basket = unserialize($_COOKIE["basket"]);
$basketall = array_count_values($get_basket);



$i = count($get_basket);
if ($i == 0){?>
		<div class="basketdiv">
			<span class="basketempty">Корзина Пуста</span>
			
		</div>
<?}else{?>
		<div class="basketdiv">
			<ul class="basket_nav">
                            <li class="active"><a href="#">Наименование товара</a></li>
                            <li><a href="#">Количество</a></li>
                            <li><a href="#">Стоимость</a></li>
                </ul></br>
			<?
				$summ = $_COOKIE["summ"];
			foreach ($basketall as $key => $value){
				
				$idbasket = $key;
				$n = $value;
	
				$good = $goods[$idbasket];
				var_dump($good);
			?>
				<ul class="basket_good">
                            <li class="spanname"><span><?=$good["nameGood"]["name"]?></span></li>
							<li><a class="basketplus" href="process/basket/basketMinus.php?id=<?=$key?>"><img src="img/minus_button.png" alt="Удалить единицу товара"></a></li>
                            <li><span><?echo "$n";?><span></li>
							<li><a class="basketplus" href="process/basket/basketPlus.php?id=<?=$key?>"><img src="img/plus_button.png" alt="Добавить единицу товара"></a></li>
                            <li><span class="spanprice"><?=$good["price"]*$n?>грн.</span></li>
							<li><a  href="process/basket/basketdel.php?id=<?=$key?>"><span class="basketdel"><img src="img/delete_button.png" alt="Удалить товар"></span></a></li>
                </ul>
				
				
				
	<?$s = $good["price"]*$n;
	$summ = $summ + $s;
		
			} ?>
		<?}?>
		<form class="fdg" action="process/basket/basketClear.php">
			<input type="submit" value="Очистить корзину">
		</form>
		<span><?echo "$summ";?></span>
		</div>