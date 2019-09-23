<?php
// Visa alla felmeddelanden
ini_set('display_errors' , '1');
error_reporting(E_ALL);

// Mina variabler
$webmaster = "Sara";
$company = "Nackademin";

// Mina konstanter
define('SITE_TITLE' , "Nackademin Yrkeshögskola");

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Variabler</title>
</head>
<body>
    <h1>Variabler</h1>
    <?php
        $name = "Mahmud";
        $age = 46;
        
        // Utskift av en variabel
        echo $name;
        echo "<br>";

        // Visa typ med hjälp av funktionen var_dump
        var_dump($name); // string
        echo "<br>";
        echo is_string($name); // 1
        echo "<br>";

        var_dump($age); // int
        echo "<br>";
        echo is_string($age); // tomt resultat
        echo "<br>";
        echo is_int($age); // 1 (sant)
        echo "<br>";

        $price = 10.50;
        var_dump($price); // float
        echo "<br>";
        echo is_numeric($price); // 1
        echo "<br>"; 
        $test = "170"; // OBS! Detta är en sträng
        echo is_int($test);  // tomt resultat
        echo "<br>";
        echo is_numeric($test); // 1

        echo "<br>";

        $married = true;
        var_dump($married);  // bool

        echo "<br>";

        $demo_variabel;
        var_dump($demo_variabel);  // NULL

        echo "<br>";


        // Utskift av en konstant
        echo SITE_TITLE;

        echo "<br>";

        // define('SITE_TITLE', 'DEMO');
        $name = "Al Hakim";
        echo $name;

        echo "<br>";

        // Magiska konstanter
        echo "Rad: " . __LINE__ . '<br>';
        echo "Rad: " . __LINE__ . '<br>';
        echo "Rad: " . __LINE__ . "<br>";
        echo "Mapp: " . __DIR__ . "<br>";
        echo "Filen ligger här: " . __FILE__ . "<br>";

        // Strängar
        echo "<h2>$name är $age gammal!</h2>";
        echo '<h2>$name är $age gammal!</h2>';

    ?>
    <hr>
    <footer style="text-align:center">
        <b>Webmaster:</b>  <?php echo $webmaster; ?> &bull;
        <b>Företag:</b> <?= $company; ?> &copy; 2019
    </footer>
</body>
</html>