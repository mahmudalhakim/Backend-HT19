<?php

/* Pseudokod
1. Ange innehållstypen JSON.
2. Skapa två PHP-arrayer för att lagra 10 olika förnamn 
   och 10 olika efternamn.
3. Arbeta med GET-Request.
Sätt en gräns/limit på antal namn till 10.
Kontrollera om det finns data i GET-Requesten (t.ex. limit=20) Ändra limit i så fall.
4. Skapa ett antal slumpgenererade namn (förnamn och efternamn) enligt GET-requesten. Skapa minst 10 namn om limit saknas! Spara dessa i en ny array.
5. Konvertera PHP-arrayen till en JSON-string.
6. Skicka JSON till klienten.
*/

// 1. Ange innehållstypen JSON
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer
// 2.1 Lagra 10 olika förnamn 
$firstNames = [
    "Mahmud" ,  // 0
    "Kalle"  , 
    "Erik"   , 
    "Adam"   , 
    "Fredrik", 
    "Astrid" , 
    "Yasmin" , 
    "Sara"   , 
    "Maria"  ,
    "Åsa"      // 9
];

// 2.2 Lagra 10 olika efternamn 
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

// 3. Arbeta med GET-Request
// T.ex. namnapi.php?limit=50
//Sätt en gräns/limit på antal namn till 10.
$limit = 10; // Defaultvärde
// Kontrollera om det finns data i GET-Requesten (t.ex. limit=20) Ändra limit i så fall.
if(isset($_GET["limit"])){
    $limit = $_GET["limit"]; // 50
}

// 4. Skapa ett antal slumpgenererade namn 
// (förnamn och efternamn) enligt GET-requesten. 
// Skapa minst 10 namn om limit saknas! 
// Spara dessa i en ny array.

// Test att slumpa tal
// echo "<h1>" . rand(0,9) . "</h1>";

// Lagra alla nya namn i en array
// $names = array();
$names = [];

for($i=0 ; $i<$limit ; $i++):

$randFN = rand(0,9);
$randLN = rand(0,9);

// Test att hämta ett förnamn från arrayen
// echo $firstNames[$randFN];
// echo $lastNames[$randLN];

$name = array(
    "firstname" => $firstNames[$randFN],
    "lastname"  => $lastNames[$randLN]
);
// Testa den nya arrayen
// echo "<pre>";
// print_r ($name);
// echo "</pre>";

// Lägg namnet i names-arrayen
// $names .= $name; // Funkar ej med arrayer
$names[] = $name;


endfor;

// Testa att skriva ut names-arrayen 
// print_r($names);

// 5. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Testa json-strängen, alltså
// 6. Skicka JSON till klienten.
echo ($json);