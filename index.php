<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

/*
[Compressed]
*/
function getRealAddress(){ if(getenv("HTTP_CLIENT_IP")) { $ip = getenv("HTTP_CLIENT_IP"); } elseif(getenv("HTTP_X_FORWARDED_FOR")) { $ip = getenv("HTTP_X_FORWARDED_FOR"); if (strstr($ip, ',')) { $tmp = explode (',', $ip); $ip = trim($tmp[0]); } } else { $ip = getenv("REMOTE_ADDR"); } return $ip; }

/*
[Uncompressed]
*/
function getRealAddress(){
	if (getenv("HTTP_CLIENT_IP")){
		$ip = getenv("HTTP_CLIENT_IP");
	}else if (getenv("HTTP_X_FORWARDED_FOR")){
		$ip = getenv("HTTP_X_FORWARDED_FOR");
    if (strstr($ip, ',')){
      $tmp = explode(',', $ip);
      $ip = trim($tmp[0]);
    }
	}else{
		$ip = getenv("REMOTE_ADDR");
	}
	return $ip;
	}
?>
