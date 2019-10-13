<?php

// Version 2 - Egen utvecklad JSON 

header("Content-Type: application/json; charset=UTF-8");

$firstNames = [
    "Mahmud",
    "Kalle",
    "Erik",
    "Adam",
    "Fredrik",
    "Astrid" ,
    "Yasmin",
    "Sara",
    "Maria",
    "Åsa"
];

$lastNames = array(
    "Al Hakim",
    "Öberg",
    "Ericsson",
    "Anka",
    "Söderberg",
    "Gustavsson",
    "Nilson",
    "Lindgren",
    "Nyström",
    "Hakimson",
);

$limit = 10; // Defaultvärde
if(isset($_GET["limit"])){
    $limit = $_GET["limit"];
}

$namesJSON = "[";
    for ($i=1; $i <= $limit; $i++) { 
        $randFN = rand(0,9);
        $randLN = rand(0,9);

        $firstname = $firstNames[$randFN];
        $lastname  = $lastNames[$randLN];
        
        $name = "{\"firstname\" : \"$firstname\",\"lastname\" :\"$lastname\"}";
        
        if($i != $limit)
            $name .= ",";
            
        $namesJSON .= $name;
    }
    $namesJSON .= "]";

    echo $namesJSON;