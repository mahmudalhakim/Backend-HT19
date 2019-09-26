<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>PHP - Array</title>
</head>
<body>
    <h1>PHP - Array</h1>

    <?php

    // Skapa en array/vektor (ett fält)
    $cars = ["Volvo", "Saab", "BMW"];
    //   Index  0       1       2

    echo "<h2>Jag tycker om $cars[0]. </h2>";

    $cars[0] = "Toyota";

    echo "<h2>Jag tycker om $cars[0]. </h2>";

    // Funktionen count() returnerar antal element 
    echo "<h3>Antal bilar: " . count($cars) . "</h3>";

    // echo $cars; // FEL

    // Skriv ut allt som finns i en array 
    // med hjälp av funktionen print_r()
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // Sortera en array med funktionen sort()
    sort($cars);

    echo "<h3>Efter sortering</h3>";
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // Lägg till ett nytt element
    $cars[] = "Mazda";

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    echo "<h2>Associativ array</h2>";
    $flowers = array(
        'Ros' => 50,
        'Liljor' => 60
    );

    echo"<pre>";
    print_r($flowers);
    echo"</pre>";

    $age = [
        "Mahmud" => 46,
        "Steve" => 60
    ];

    echo"<pre>";
    print_r($age);
    echo"</pre>";


    echo '<h2>$_GET</h2>';
    echo "<a href='array.php?name=Mahmud'>
    Klicka här för att testa en GET-Request (ett namn)
    </a><br>";
    echo "<a href='array.php?firstname=Steve&lastname=Jobs'>
    Klicka här för att testa en GET-Request (två namn)
    </a><br>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo '<h2>$_SERVER</h2>';
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "<h3>Filnamn: ". $_SERVER['PHP_SELF'];

    echo "<h2>Multidimensionella arrayer</h2>";

    // Arrayen lagrar bilar, 
    // antal bilar som finns i lagret
    // samt antal sålda bilar
    $cars = array(
        array("Volvo", 22 , 18),
        array("Mazda", 10 , 20)        
    );

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // Skriv ut den första arrayen som finns i 
    // den stora arrayen.
    echo "<pre>";
    print_r($cars[0]);
    echo "</pre>";

    echo "<h3>Vi har " . $cars[0][1] . " " . $cars[0][0] . " i lagret</h3>";
    
    // Visa koden i webbläsaren
    echo '<h3>Vi har $cars[0][1] $cars[0][0] i lager.</h3>';
    
    // FEL! Array to string conversion
    echo "<h3>Vi har $cars[0][1] $cars[0][0] i lager.</h3>";


    // TIPS! Funktioner i PHP är inte "Case Sensitive"
    // Funktioner är "Case Insensitive"
    ECHO "<h1>HEJ MAHMUD</h2>";
    PRINT_R($cars);

    ?>
</body>
</html>