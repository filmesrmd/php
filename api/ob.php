<?php
$url = json_decode(file_get_contents("https://version.common.freefiremobile.com/live/ver.php?version=1.69.1&lang=pt-br&device=android&channel=android&appstore=googleplay&region=DEFAULT"));
$pega = $url->billboard_cdn_url;
$a = explode("/CSH",$pega);
$b = explode ("common/",$a[0]);
echo $b[1];
?>