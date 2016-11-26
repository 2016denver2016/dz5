<?
function checkPhone($phone){
		if(preg_match('/[\s\)\(\+\-\$\.\\\%\^\?\|\[\]]/',$phone)){
			return false;
		
	}elseif(preg_match_all('/380[0-9]{2}[0-9]{7}$/',$phone)){
		return true;		
	}else{
		return false;		
		
	}
}

function checkName($name){
	 if(preg_match('/\w{2,32}/i',$name,$arr)){
		return true;
	}else{
		return false; 
}
}

function checkSurname($surname){
		if(preg_match('/[\s\)\(\+\-\$\.\\\%\^\?\|\[\]]/',$surname)){
			return false;
		
	}elseif(preg_match_all('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/',$surname)){
		return true;
	}else{		
		return false;
	}
}

?>
