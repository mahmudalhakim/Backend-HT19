<?php
// Ange en endpoint (resource)
$url = "https://jsonplaceholder.typicode.com/users";

// Hämta data 
$json = file_get_contents($url);

// Konvertera JSON till en PHP-Array
$array = json_decode($json, true);

// Skriv ut en HTML-lista över alla namn
echo "<ul>";
foreach($array as $key => $value):
    echo "<li>";
    echo $value["name"];
    echo "</li>";
endforeach;
echo "</ul>";