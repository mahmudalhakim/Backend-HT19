<?php

/**
 * En PHP-App som använder en befintlig tjänsteserver
 * Appen använder ett API från JSONPlaceholder
 * Hämta alla användare 
 * Visa alla användare i webbläsaren
 */

// 1. Ange en endpoint (resource)
$url = "https://jsonplaceholder.typicode.com/users";

// 2. Hämta data 
$json = file_get_contents($url);

// 3. Testa data genom att skriva ut allt på skärmen
// echo "<pre>";
// echo $json;
// echo "</pre>";

// 4. Konvertera JSON till en PHP-Array
// Tips: Argument nummer 2 (true) skapar en assoc. array
$array = json_decode($json, true);

// 5. Testa Arrayen
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// 6. Välj data att skriva ut
// 6.1 Skriv ut alla namn och radbrytning
foreach($array as $key => $value){
    // Testa $key
    // echo $key ; // 0123456789
    // echo "<br>";

    // Testa $value
    // echo $value;  // OBS! Vi får arrayer
    // echo "<pre>";
    // print_r($value); // $value är ett antal arrayer
    // echo "</pre>";

    // Hämta name från $value
    echo $value["name"] . "<br>";

    // Hämta telefonnumret
    // echo $value["phone"] . "<br>"; 

} // foreach slutar här

// 6.2 Skriv ut en HTML-lista
// 6.3 Skriv ut en HTML-tabell


?>