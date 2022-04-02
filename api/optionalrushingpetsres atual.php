<?php
ini_set('display_errors', 0 );
error_reporting(0);

$var = json_decode(file_get_contents("https://www.rmdpro.com.br/api/versao"));
$cap = json_decode(file_get_contents("https://version.common.freefiremobile.com/live/ver.php?version=".$var->ff_normal->versao."&device=android"));
$aqui = explode("|",$cap->remote_option_version);

$bc = str_replace(":","/",$aqui[14]);
$o = explode("/",$bc);
$k=$o[1]+""; 
echo $k;
?>