<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Iterationer</title>
    <style>
    td{
        border:1px solid blue;
        padding:5px;
    }
    </style>
</head>
<body>
    <h1>Iterationer</h1>
    <?php

        $colors = array('Red', 'Green', 'Blue');
        // Eller så här
        $colors = ['Red', 'Green', 'Blue', 'Black'];

        // Skriv ut arrayen med print_r 
        // OBS! Används enbart vid testning
        print_r($colors);

        // Skriv ut en "snyggare" lista över alla färger.
        echo "<h2>My Colors</h2>";
        foreach($colors as $color){
            echo "$color <br>";
        }

        echo "<h3>Alternativ syntax</h3>";
        foreach($colors as $c):
            echo "$c <br>";
        endforeach;

        echo "<h3>HTML Lista</h3>";
        echo "<ul>";
        foreach($colors as $color){
            echo "<li>$color</li>";
        }
        echo "</ul>";

        echo "<h3>HTML Tabell</h3>";
        echo "<table>";
        echo "<tr><th>My Colors</th></tr>";
        foreach($colors as $color):
            echo "<tr><td>$color</td></tr>";
        endforeach;
        echo "</table>";

    ?>
</body>
</html>