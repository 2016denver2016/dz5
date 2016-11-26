<html>
<head>
<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]
	sly@ua.fm-->
	<title></title>
	
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	
	<link href="./css/reset.css" rel="stylesheet">
	<link href="./css/normalize.css" rel="stylesheet">
	
	<link href="./css/grid.css" rel="stylesheet">
	<link href="./themify-icons/themify-icons.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	
	
</head>
<body>

<div class="wrapper">

	<div class="about_us">
                <div class="layout">
            <?//var_dump ($goods ["imgGood"][0]);?> 
						


						<div class="grid_3">
							<div class="aboutblock1">
								<?if ($good["mediaLinkVideo"]) {?>
								<div class="video">
									<a  href="<?=$good["mediaLinkVideo"]?>"><img class="cam" src="img/camera.jpg" alt="Демо"></a>
									<a  href="<?=$good["mediaLinkVideo"]?>">Видеобзор</a>
								</div>
								<?}?>
								<?if ($good["mediaLinkDemo"]) {?>
								<div class="demo">
									<a  href="<?=$good["mediaLinkDemo"]?>"><img class="cam" src="img/camera.jpg" alt="Демо"></a>
									<a  href="<?=$good["mediaLinkDemo"]?>">Демонстрация</br>товара</a>
								</div>
								<?}?>
									<span class="<?=$good["sticker"][0]?>"></span>
									<a  href="?route=product&id=<?=$key?>"><img class="imgphone" src="<?=$good["imgGood"][1]?>"alt="Мобилка"> </a>
									<a class="lenovo1" href="<?=$good["nameGood"]["nameLink"]?>"><span><?=$good["nameGood"]["name"]?></span></a>
									<span class="oldPrice"><?=$good["oldPrice"]?>грн.</span>
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
									<?for($img=0; $img<count($good["features"]); $img++){?>						
											
												<a  href="">
												<?switch($good["features"][$img]){
													case "12073.jpg":
												?><img src="img/12073.jpg" alt=""/></a><?
													break;?>
												<a  href=""><?
													case "2635.png":
												?><img src="img/2635.png" alt=""/></a><?
													break;?>
												<a  href=""><?
													case "2675.png":
												?><img src="img/2675.png" alt=""/></a><?
													break;?>
												<a  href=""><?
													case "1516.png":
												?><img src="img/1516.png" alt=""/></a><?
													break;?>
												<a  href=""><?
													case "2655.png":
												?><img src="img/2655.png" alt=""/></a><?
													break;?>
											<?}?>	
												
											<?}?>
											</div>
								
													<span class="description"><?=$good["description"]?></span>
										
											<?for($color=0; $color<count($good["colorsGood"]); $color++){?>						
											
												<a class="col" href="<?=$good["colorsGood"][$color][1]?>">
												<?switch($good["colorsGood"][$color][0]){
													case "white":
												?><img src="img/white.png" alt="white"/><br></a><?
													break;?>
												<a class="col" href="<?=$good["colorsGood"][$color][1]?>"><?
													case "black":
												?><img src="img/black.png" alt="black"/><br></a><?
													break;?>
												<a class="col" href="<?=$good["colorsGood"][$color][1]?>"><?
													case "blue":
												?><img src="img/blue.png" alt="blue"/><br></a><?
													break;?>
												<a class="col" href="<?=$good["colorsGood"][$color][1]?>"><?
													case "red":
												?><img src="img/red.png" alt="red"/><br></a><?
													break;?>
											<?}?>	
												
								<?}?>
								<?if ($good["endingGood"] == false) {?>
									<a  href="<?=$good["idGood"]?>"><span class="cell">Купить</span></a>
								 <?}else {?>
									<span class="cell2">Купить</span></a>
								<?}?>
								
								
								<?if ($good["endingGood"]) {?>
									<div class="ending">
										<a  href="<?=$good["endingGood"]?>"><img src="img/ending.png" alt=""></a>
										
									</div>
								<?}?>		
								
							</div>
							
						</div>


				</div>
			</div>	

	
</div>
	
</body>
</html>