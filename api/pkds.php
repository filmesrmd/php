<?php
    $abc =  json_decode(file_get_contents('https://ff-advance.ff.garena.com/api/index?lang=en'));
    echo "Registro: " . date("d/m",$abc->register_time[0]). ' até '.date("d/m",$abc->register_time[1])."<br>";
    echo "Teste: " . date("d/m",$abc->playtest_time[0]). ' até '.date("d/m",$abc->playtest_time[1]);
?>
