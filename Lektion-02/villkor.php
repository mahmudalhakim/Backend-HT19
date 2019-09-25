<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8"> 
    <title>Villkor</title>
<style>
body{
    font-family: courier;
    font-size:2em;
}
</style>
</head>

<body>
    <h1>Att välja / Villkor (selektioner)</h1>

    <?php

    echo "<h2>Ternary-operator ?: </h2>";

    $user = "";  // En tom sträng, OBS! Två "
    echo "Welcome " .  (empty($user) ? "Guest" : $user) . "<br>";
    $user = "Mahmud";
    echo "Welcome " .  (empty($user) ? "Guest" : $user) . "<br>";

    echo "<h2>IF-ELSE-satsen</h2>";

    $time = 21;
    echo "Time now: $time <br>";
    if($time < 20)
        echo "Have a good day<br>";
    else    
        echo "Have a goog night!<br>";
    
    // Skriv om ternary till if-else
    $user = "";
    if(empty($user)){
        echo "Welcome Guest";
        echo "<hr>";
    }
    else{
        echo "Welcome $user<br>";
        echo "<hr>";
    }


    // Alternativ syntax
    if(empty($user)):
        echo "Welcome Guest";
        echo "<hr>";
        if(true):
            echo "Inne i en innre loop";
        endif;
        
    else:
        echo "Welcome $user<br>";
        echo "<hr>";

    endif;

    ?>

</body>
</html>