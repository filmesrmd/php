<?php
$linkplay = file_get_contents("https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR");
$sep1 = explode('class="IQ1z0d"><span class="htlgb">',$linkplay);
$sep2 = explode('</span></div></span',$sep1[4]);

$versao = $sep2[0];

$apiv = json_decode(file_get_contents('https://version.common.freefiremobile.com/live/ver.php?version='.$versao.'&lang=pt-br&device=android&channel'));
echo $apiv->remote_version;
?>
