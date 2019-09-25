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
echo '$x=' . $x . "<br>\n";
echo '$y=' . $y . "<br>\n";
echo $x . "+" . $y . "=" . ($x+$y) . "<br>\n";
echo $x . "-" . $y . "=" . ($x-$y) . "<br>\n";
echo $x . "*" . $y . "=" . ($x*$y) . "<br>\n";
echo $x . "/" . $y . "=" . ($x/$y) . "<br>\n";
echo $x . "%" . $y . "=" . ($x%$y) . "<br>\n";
echo $x . "^" . $y . "=" . ($x**$y) . "<hr>\n";

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
echo "<br>";  

echo '$x ';
echo ' === ';
echo '$y är ';
echo  $x === $y;  // Kontrollerar innehåll och typ
echo "<br>";  

echo '$x ';
echo ' != ';
echo '$y är ';
echo  $x != $y ; // inte lika med

echo "<h3>OBS! false i PHP är ett tomt resultat</h3>";
echo "<h3>OBS! true i PHP är 1 </h3>";

echo "<h4>Spaceship-operator</h4>";
$x = 5;
$y = 5;
echo '$x=' . $x . "<br>";
echo '$y=' . $y . "<br>";
echo '$x ';
echo ' &lt;=&gt;  '; // Spaceship-operator
echo '$y är ';
echo  $x <=> $y;  
echo "<br>";  

$x = 10;
$y = 5;
echo '$x=' . $x . "<br>";
echo '$y=' . $y . "<br>";
echo '$x ';
echo ' &lt;=&gt;  '; // Spaceship-operator
echo '$y är ';
echo  $x <=> $y;  
echo "<br>"; 

$x = 5;
$y = 15;
echo '$x=' . $x . "<br>";
echo '$y=' . $y . "<br>";
echo '$x ';
echo ' &lt;=&gt; '; // Spaceship-operator
echo '$y är ';
echo  $x <=> $y;  
echo "<br>"; 

echo "<h3>Uppräkning</h3>";
$x = 1;
echo '$x=' . $x . "<br>";
$x++; // x + 1
echo '$x=' . $x . "<br>";
$x++; // x + 1
echo '$x=' . $x . "<br>";
$x++; // x + 1
echo '$x=' . $x . "<br>";

echo "<h3>Nedräkning</h3>";
$x = 1;
echo '$x=' . $x . "<br>";
$x--; // x - 1
echo '$x=' . $x . "<br>";
$x--; // x - 1
echo '$x=' . $x . "<br>";
$x--; // x - 1
echo '$x=' . $x . "<br>";

echo "<h2>Strängoperatorer</h2>";
$name = "Mahmud";
// Lägg till text med .=
$name .= " Al ";   // Viktigt
$name .= " Hakim";
echo "<h3>$name</h3>";

// Eller
$name = "Mahmud";
$name = $name . " Al Hakim";

?>
</body>
</html>