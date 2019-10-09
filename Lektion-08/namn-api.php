<?php
// Visa 10 namn från namnapi.se
$url = "http://api.namnapi.se/v2/names.json?limit=10";
$data = file_get_contents($url);
$array = json_decode($data, true);

foreach($array["names"] as $key => $value):
    echo $value["firstname"];
    echo " ";
    echo $value["surname"];
    echo "<br>";
endforeach;