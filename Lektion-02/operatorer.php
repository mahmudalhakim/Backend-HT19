<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operatorer</title>
    <style>
    body{
        font-family: courier;
        font-size:2em;
    }
    </style>
</head>
<body>
    
<?php

$x = 10;
$y = 3;


echo "<h2>Aritmetiska operatorer</h2>";
echo '$x=' . $x . "<br>";
echo '$y=' . $y . "<br>";
echo $x . "+" . $y . "=" . ($x+$y) . "<br>";
echo $x . "-" . $y . "=" . ($x-$y) . "<br>";
echo $x . "*" . $y . "=" . ($x*$y) . "<br>";
echo $x . "/" . $y . "=" . ($x/$y) . "<br>";
echo $x . "%" . $y . "=" . ($x%$y) . "<br>";
echo $x . "^" . $y . "=" . ($x**$y) . "<hr>";

echo "<h2>Tilldelningsoperatorer</h2>";
$x += 5; // = $x + 5 = 15
echo '$x=' . $x . "<br>";

$x -= 5; // = $x - 5 = 15 - 5 = 10
echo '$x=' . $x . "<hr>";

echo "<h2>Jämförelse-operatorer</h2>";
$x = 10; // heltal
$y = "10"; // sträng
echo '$x=' . $x . "<br>";
echo '$y=' . $y . "<br>";

echo '$x ';
echo ' == ';
echo '$y är ';
echo $x==$y ; // 1 (samma innehåll)
echo "<br><br>";  
// false i PHP är ett tomt resultat
// true i PHP är 1 

echo '$x ';
echo ' === ';
echo '$y är ';
echo  $x === $y;  // Kontrollerar innehåll och typ
echo "<br><br>";  

echo '$x ';
echo ' != ';
echo '$y är ';
echo  $x != $y ; // inte lika med
echo "<br><br>"; 









?>





</body>
</html>
