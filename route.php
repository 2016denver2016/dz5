<? switch ($route) {
  		
	case 'catalog':
  		include "view/catalog.tpl";
  		break;
    case 'produkt':
		include "view/produkt.tpl";
        break; 
	case 'reg':
		include "session/session.php";
        break; 
	case 'profile':
		include "session/profile/profile.php";
        break; 
	case 'profileuser':
		include "session/profileuser.php";
        break; 
	case 'addgoods';
		include "process/form/addgoods/form.php";
		break;
		
  	}
	switch ($route) {
  		
	case 'basket':
		include "view/catalog.tpl";
  		include "view/basket.tpl";
  		break;
	}
?>