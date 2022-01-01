<?php
ini_set('display_errors', 0 );
error_reporting(0);

$sep1 = explode('class="IQ1z0d"><span class="htlgb">',file_get_contents("https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR"));
$sep2 = explode('</span></div></span',$sep1[4]);
$versao = $sep2[0];
$apiv = json_decode(file_get_contents('https://version.common.freefiremobile.com/live/ver.php?version='.$versao.'&lang=pt-br&device=android&channel'));
$capp = explode('.',$apiv->remote_version);
$depois = $capp[2];
$a = $depois+1;
if (file_get_contents('https://freefiremobile-a.akamaihd.net/live/ABHotUpdates/android/1.'.$capp[1].'.'.$a.'/versioninfo')){$very  = "1.".$capp[1].".".$a;}else{$very = "false";}
//
$linkplaym = file_get_contents("https://play.google.com/store/apps/details?id=com.dts.freefiremax&hl=pt_BR");
$sepa1 = explode('class="IQ1z0d"><span class="htlgb">',file_get_contents("https://play.google.com/store/apps/details?id=com.dts.freefiremax&hl=pt_BR"));
$sepa2 = explode('</span></div></span',$sepa1[4]);
$version = $sepa2[0];
$apiv2 = json_decode(file_get_contents('https://version.common.freefiremobile.com/live/ver.php?version='.$version.'&lang=pt-br&device=android_max&channel'));
$cappt = explode('.',$apiv2->remote_version);
$depoix = $cappt[2];
$z = $depoix+1;
if (file_get_contents('https://freefiremobile-a.akamaihd.net/live/ABHotUpdates/android_max/2.'.$cappt[1].'.'.$z.'/versioninfo')){$veri  = "2.".$cappt[1].".".$z;}else{$veri = "false";}
//
for($hi = 22; $hi<27; $hi++){
	$k = json_decode(file_get_contents('https://version.advance.freefiremobile.com/trial/ver.php?version=66.'.$hi.'.0&device=android'));
	$myv .= $k->remote_version."<br>";
	$bv = explode('.',$k->remote_version);
	$ault = $bv[2]+1;
if (file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/66.'.$bv[1].'.'.$ault.'/versioninfo')){$ll  = "66.".$bv[1].".".$ault;}else{$ll = "false";}
}

$criajson = array(
	"ff_normal" => array(
    "versao" => $apiv->remote_version,
    "checa_mini" => $very,
	),
	"ff_max" => array(
    "version" => $apiv2->remote_version,
    "checa_mini" => $veri,
	),
	"ff_adv" => array(
    "version" => $myv,
    "checa_mini" => $ll,
	),
);

echo json_encode($criajson);
?>