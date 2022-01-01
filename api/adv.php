<?php
$api_adv = json_decode(file_get_contents("https://ff-advance.ff.garena.com/api/index?lang=en"));

	if(file_get_contents("https://ff-advance.ff.garena.com/?lang=en")){
		$verifica = "true";
		$date_create_account = $api_adv->register_time[0];
		$date_end_account = $api_adv->register_time[1];
		$date_playtest = $api_adv->playtest_time[0];
		$date_end_playtest = $api_adv->playtest_time[1];
	}else{
		$verifica = "false";
		$date_create_account = "false";
		$date_end_account =  "false";
		$date_playtest = "false";
		$date_end_playtest = "false";
		}
		
		
$criajson = array(
    "create_account " => date("d-m-y",$date_create_account),
    "end_account " => date("d-m-y",$date_end_account),
    "playtest " => date("d-m-y",$date_playtest),
    "end_playtest " => date("d-m-y",$date_end_playtest),

);

echo json_encode($criajson);

?>