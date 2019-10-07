<?php

// Arbeta med funktioner

// Skapa en parameterlös funktion
function demo1(){
    echo "<p>Hello World!</p>";
}

// Anropa funktionen 
demo1();
demo1();
demo1();

// Funktion med 1 parameter
function demo2($msg){
    echo "<p>Hello $msg<p>";
}
// Testa funktionen med flera argument
demo2("Mahmud"); // Ok
demo2("Rasmus"); // OK
// demo2(); // Error
demo2("Kalle" , "Anka"); // OK men...

// Funktion med flera parametrar
function demo3($firstName, $lastName){
    echo "<p>Hello $firstName $lastName!</p>";
}
// Testa funktionen med flera argument
demo3("Kalle", "Anka"); // OK
// demo3("Steve"); // Error
// demo3();  // Error
demo3("Kalle", "Anka", "Test"); // Ok men....

// En funktion som returnerar ett värde
function demo4($firstName , $lastName){
    return "<p>Hello $firstName $lastName</p>";
}
$hello = demo4("Bill", "Gates");
echo $hello;
// Eller skriv ut direkt
echo demo4("Bill", "Gates");

// Skapa en funktion som skriver ut 
// ett meddelande och en radbrytning
function echo_br($text){
    echo $text . "<br>\n";
    // Eller
    // echo "$text <br>";
}

echo_br("Hej Mahmud");
echo_br("Hej Mahmud");

// En funktion som skriver ut en array
// inom pre-taggen
// Används vid testning
function print_array($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$myArray = ["Ett", "Två", "Tre"];
print_array($myArray);

print_array($_GET);

?>