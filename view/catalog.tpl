<html>
<head>
	
</head>
<body>

<div class="wrapper">

	<div class="about_us">
                <div class="layout">
            <?$dbc = mysqli_connect("localhost","phpLern","NHY67ujm","phpLern");
					if (!$dbc){
						//echo"Не могу соединиться с сервером MySQL";
						die();
					}else{
			//echo"Соединение с сервером MySQL прошло успешно";
					echo"<br>";
					}?> 
						
/////////new newnew
<!--sdzfzjsdfzsdfzsdfzsdfszdfsdfsdfsdfdf-->
<?

					foreach ($goods as $key => $good) {
					 $id = $good["id"];
						
						//var_dump($id);
										foreach ($featchgoods as $key => $value){
											if ($value["id_good"] == $id){
												$featch = ($value["id_featch"]);
												//var_dump($value["id_good"]);
												//var_dump($featch);
												$queryFeatch = "SELECT * FROM `idfeatch` 
																WHERE id ='".$featch."';";
												$resfeatch = mysqli_query($dbc, $queryFeatch);
													if (!$resfeatch){
														var_dump($queryFeatch);
														die();
													}
												//$featchgood = ;
												$rowfeatch = mysqli_fetch_assoc($resfeatch);
												$featchgood = $rowfeatch;
												break;
												
												}
												
												
											}
											

											$queryimg = "SELECT `id_img` FROM `idgoodidimg` 
																WHERE id_good ='".$id."';";
												$resimg = mysqli_query($dbc, $queryimg);
													if (!$resfeatch){
														var_dump($queryimg);
														die();
													}
												//$featchgood = ;
												$rowfeatch = mysqli_fetch_assoc($resimg);
												$feathimg = $rowfeatch;
												
												//echo"<pre>";
												$idimg = ($feathimg["id_img"]);
												//var_dump($idimg);
												
												
												
											$queryFimg = "SELECT `img_front` FROM `idimg` 
																WHERE id ='".$idimg."';";
												$resFimg = mysqli_query($dbc, $queryFimg);
													if (!$resFimg){
														var_dump($queryFimg);
														die();
													}
												//$featchgood = ;
												$rowFimg = mysqli_fetch_assoc($resFimg);
												$pachimg = $rowFimg;
												
												//echo"<pre>";
												//$idimg = ($feathimg["id_img"]);
												//var_dump($pachimg);
												
											
						?>
						<div class="grid_3">
							<div class="aboutblock1">
								<?if ($good["video"]) {?>
								<div class="video">
									<a  href="<?=$good["video"]?>"><img class="cam" src="img/camera.jpg" alt="Демо"></a>
									<a  href="<?=$good["video"]?>">Видеобзор</a>
								</div>
								<?}?>
								<?if ($good["demo"]) {?>
								<div class="demo">
									<a  href="<?=$good["demo"]?>"><img class="cam" src="img/camera.jpg" alt="Демо"></a>
									<a  href="<?=$good["demo"]?>">Демонстрация</br>товара</a>
								</div>
								<?}?>
									<span class="<?=$good["sticker"]?>"></span>
									<a  href="?route=product&id=<?=$key?>&idFeatch=<?=$featch?>&idImg=<?=$idimg?>"><img class="imgphone" src="<?=$pachimg["img_front"]?>"alt="Мобилка"> </a>
									<a class="lenovo1" href="<?=$good["nameLink"]?>"><span><?=$good["name"]?></span></a>
									<?if ($good["old_price"] == true) {?>
										<span class="oldPrice"><?=$good["old_price"]?>грн.</span>
									<?}?>
									<span class="price"><?=$good["price"]?>грн.</span>
												<?switch($good["raiting"]){
													case 3:
														?><img class="star" src="img/3.png" alt="white"/><?
													break;?>
														<?
													case 4:
														?><img class="star" src="img/4.png" alt="black"/><?
													break;?>
														<?
													case 5:
														?><img class="star" src="img/5.png" alt="blue"/><?
													break;?>
										<?}?>	
										<a class="reviews" href="<?=$good["reviews"][1]?>"><span>
										
										<?=$good["reviews"][1];echo "отзыв";
												$i = $good["reviews"][1];		
												$rest = $i%10;
										if ($rest === 0 ||$rest>=5 && $rest <= 9 || $i%100 >= 10 && $i%100 <= 20 ) {
												echo "ов";
										}elseif($rest == 1){
											echo "";
										}else{
											echo "a";
										}
										
										?>
										
										</span> </a>
										
										
										<div class="imgdiv">
											<?//for($img=0; $img<count($good["features"]); $img++){
											foreach ($featchgood as $key => $value){
												switch($value){
													case "3G":?>
													<a  href="<?=$value?>"><img src="img/1516.png" alt="3G"/><br></a>
												<?break;
													case "4cor":?>
													<a  href="<?=$value?>"><img src="img/2675.png" alt="4Ядра"/><br></a>
												<?break;
													case "8core":?>
													<a  href="<?=$value?>"><img src="img/2655.png" alt="8Ядер"/><br></a>
												<?break;
													case "ips":?>
													<a  href="<?=$value?>"><img src="img/2635.png" alt="IPS"/><br></a>
												<?break;
													case "credit":?>
												<a  href="<?=$value?>"><img src="img/12073.jpg" alt="Кредит"/><br></a>
												<?break;
												}
												
											}

											?>						
											
												
											</div>
								
													
										
											<?//for($color=0; $color<count($featchgood); $color++){
											foreach ($featchgood as $key => $value){
												switch($value){
													case "red":?>
														<a class="col" href="<?=$value?>"><img src="img/red.png" alt="red"/><br></a>
													<?break;
													case "blue":?>
														<a class="col" href="<?=$value?>"><img src="img/blue.png" alt="blue"/><br></a>
													<?break;
													case "black":?>
														<a class="col" href="<?=$value?>"><img src="img/black.png" alt="black"/><br></a>
													<?break;
													case "white":?>
														<a class="col" href="<?=$value?>"><img src="img/white.png" alt="white"/><br></a>
													<?break;
													}												
		
											}

											?>						
											
												
												
								<?//}?>
								<span class="description"><?=$good["description"]?></span>
								<?if ($good["in_stock"] == 1) {?>
									<a  href="process/basket/basketadd.php?id=<?=$key?>"><span class="cell">Купить</span></a>
								 <?}else {?>
									<span class="cell2">Купить</span></a>
								<?}?>
								
								
								<?if ($good["in_stock"] == 0) {?>
									<div class="ending">
										<a  href="<?=$good["in_stock"]?>"><img src="img/ending.png" alt=""></a>
										
									</div>
								<?}?>		
								
							</div>
							
						</div>
<?}?>
<?mysqli_close($dbc);?>

				</div>
			</div>	

	
</div>
	
</body>
</html>