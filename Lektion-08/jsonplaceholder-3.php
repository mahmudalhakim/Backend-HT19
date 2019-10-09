<?php
// Ange en endpoint (resource)
$url = "https://jsonplaceholder.typicode.com/users";

// Hämta data 
$json = file_get_contents($url);

// Konvertera JSON till en PHP-Array
$array = json_decode($json, true);

// Skriv ut en HTML-tabell
// Visa namn och email
$table = "<table class='table table-striped table-hover'>";
$table .= "<tr><th>Namn</th><th>E-post</th></tr>";
foreach($array as $key => $value):
    $table .= "<tr>";
    $table .= "<td>";
    $table .= $value["name"];
    $table .= "</td>";
    $table .= "<td>";
    $table .= $value["email"];
    $table .= "</td>";
    $table .= "</tr>";
endforeach;
$table .=  "</table>";

echo $table;