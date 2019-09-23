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

        // Utskift av en konstant
        echo SITE_TITLE;

        echo "<br>";

        // define('SITE_TITLE', 'DEMO');
        $name = "Al Hakim";
        echo $name;

        echo "<br>";

        // Magiska konstanter
        echo "Rad: " . __LINE__ . "<br>";
        echo "Rad: " . __LINE__ . "<br>";
        echo "Rad: " . __LINE__ . "<br>";
        echo "Mapp: " . __DIR__ . "<br>";
        echo "Filen ligger här: " . __FILE__ . "<br>";
        


    ?>
    <hr>
    <footer style="text-align:center">
        <b>Webmaster:</b>  <?php echo $webmaster; ?> &bull;
        <b>Företag:</b> <?= $company; ?> &copy; 2019
    </footer>
</body>
</html>