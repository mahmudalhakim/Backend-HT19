<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
    <style>
    body{
        font-family: courier;
        font-size:2em;
    }
    .string{
        font-size:3em;
    }
    </style>
</head>
<body>
<h1>Stränghantering i PHP</h1>  

<?php

// Konkatenering
$url = "https://webacademy.se";
$txt = "Web Academy";

$link = '<a href="' . $url . '">'. $txt . '</a>';

echo "<h3>$link</h3>";

echo "<h3>Escape-sekvenser</h3>";
$name = "Mahmud";
echo "<h4>Mitt namn är \"$name\"</h4>";
echo "<h4>Mitt namn är \'$name\'</h4>";
// Mitt namn är \'Mahmud\'
echo "<h4>Mitt namn är '$name'</h4>";
// Mitt namn är 'Mahmud'

$link = "<a href=\"$url\">$txt</a>";
echo "<h4>$link</h4>";

$link = "<a href='$url'>$txt</a>";
echo "<h4>$link</h4>";

echo "<h2>Användbara funktioner</h2>";

$br = "<br>\n";
$name = "mahmud AL hakim";
echo "<div class='string'>";
echo $name .  "<br>";
echo "Antal tecken: " . strlen($name) . $br;
echo strtoupper($name) . $br;
echo strtolower($name) . $br;
echo strrev($name) . $br;
echo ucfirst($name) . $br;
echo ucwords($name) . $br;
echo ucwords(strtolower($name)) . $br;

// Extra övning 
echo strtoupper(substr($name, 0 , 6)) . " " .strrev(substr($name, 7));

echo "</div>";

?>
</body>
</html>