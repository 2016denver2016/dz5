<?

//$str = file_get_contents("base/good.base");
//$nGood = unserialize($str);

$videoLink = $_POST["video"];
$mediaLink = $_POST["demo"];

foreach ($_POST as $key => $value){
		switch($key){
		
			case "superPrice":
			$colors = array();
			$colors = $key;
			
			
		break;
			case "topSales":
			$colors = array();
			$colors = $key;
			
			
		break;
			case "stock":
			$colors = array();
			$colors = $key;
			
			
		break;
		}
		
	}
	
	
	
$mediaLinkVideo["mediaLinkVideo"] = $videoLink;
$mediaLinkVideo["mediaLinkDemo"] = $mediaLink;
$mediaLinkVideo["sticker"] = $colors;
file_put_contents("../../../base/good.base" ,serialize($mediaLinkVideo) ."\n");
//$strname = file_get_contents("base/good.base");
//$good[] = unserialize($strname);
//file_put_contents("base/good.base" ,serialize($good) ."\n");

header("Location: form.php");

?>