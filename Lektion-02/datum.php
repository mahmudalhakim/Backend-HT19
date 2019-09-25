<?php
// Visa alla felmeddelanden
ini_set('display_errors' , '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Datum i PHP</title>
    <style>
        body{
            font-family: courier;
            font-size:2em;
        }
        footer{
            font-family: Arial;
            font-size:0.8em;
            text-align:center;
        }
</style>
</head>
<body>
    <h1>Datum och tid i PHP</h1>
    <?php

        date_default_timezone_set("Europe/Stockholm");

        echo date("Y") . "<br>";
        echo date("Y-m-d") . "<br>";
        echo date("m/d/Y") . "<br>";
        echo date("H:i:s") . "<br>";

        echo "<h3>Lite om strtotime</h3>";
        echo date("Y-m-d", strtotime("last year")) . "<br>";
        echo date("Y-m-d", strtotime("+2 days")) . "<br>";
        echo date("Y-m-d", strtotime("+2 weeks")) . "<br>";

        echo "<h2>Sun info</h2>";
        $sun_info = date_sun_info(strtotime("today"), 59.33258 , 18.0649 );
        $sunrise = date("H:i:s", $sun_info['sunrise']); 
        echo "<h2>Stockholm soluppgång: $sunrise</h2>";

    ?>

<hr>
<footer>
    Copyright &copy; <?=date("Y")?>
</footer>
</body>
</html>