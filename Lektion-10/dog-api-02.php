<?php

// Övning 2
/* Visa alla breeds (hundraser) och sub-breeds
från Dog API som en HTML-lista. */

// Steg 1: Ange en endpoint
$endpoint = "https://dog.ceo/api/breeds/list/all";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($endpoint);

// Steg 3: Testa att få tillbaka en giltig (valid) JSON
// echo $json;

// Steg 4: Konvertera JSON till en Array
$array = json_decode($json, true);

// Steg 5: Testa konverteringen 
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// Steg 6: Hämta data från arrayen

// 6.1 Skapa en iteration
$list = "<ol>";
foreach($array['message'] as $key => $value):

// 6.2 Testa key och value
// echo "<pre>";
// print_r ($value);
// echo "</pre>";

// 6.3 Skapa listelement

$list .= "<li>";
$list .=  ucfirst($key);

// Visa sub-breed
// $list .= empty($value) ? "" : ": " ;
// $list .= implode(", ", $value);

// En alternativ (komplicerad lösning)
if(! empty($value) ):
    $list .= ": ";
    foreach($value as $k=>$v):
        $list .= "$v";
        if($k+1 != count($value))
            $list .= ", ";
        
    endforeach;
endif;


$list .="</li>";

endforeach;
$list .= "</ol>";

// Steg 7. Testa resultatet i W3C Validation Service
// Gå till filen dog-api-01.template.php