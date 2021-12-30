<?php
$linkplay = file_get_contents("https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR");
$sep1 = explode('class="IQ1z0d"><span class="htlgb">',$linkplay);
echo $sep1[1];
?>
