<form method = 'post'>
<input type = 'text' name = 'capt'>
<button>Capturar Imagens Do web Evento</button>
</form>

<?php
ini_set('display_errors', 0 );
error_reporting(0);

$link = $_POST['capt'];
$token = parse_url($link)['query'];
$regiao_separa = explode('&lang=',$token);
$regiao = $regiao_separa[1];
$nome_evento = parse_url($link)['host'];

$api = file_get_contents('https://'.$nome_evento.'/api/info?'.$token.$regiao);

$linkapi = explode("https",$api);
for($b = 0; $b<count($linkapi)-1;$b++){
	$nada = explode('",',$linkapi[$b]);
	echo "<img src = 'https".$nada[0]."'/>";
	echo "<br>";
}

$api_css = file_get_contents('https://'.$nome_evento.'/api/css?'.$token.$regiao);
$convert = explode(")",$api_css);
for($a = 0; $a<count($convert)-1;$a++){
	$outro = explode("(",$convert[$a]);
	echo '<img src = '.$outro[1].'/>';
	echo "<br>";
}
?>

