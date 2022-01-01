<?php
for($hi = 22; $hi<27; $hi++){
	$k = json_decode(file_get_contents('https://version.advance.freefiremobile.com/trial/ver.php?version=66.'.$hi.'.0&device=android'));
	$myv .= $k->remote_version."<br>";
	$bv = explode('.',$k->remote_version);
	
	$mud .= $bv[2]+1;
}

echo $myv;
?>