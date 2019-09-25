<?php
// Visa alla felmeddelanden
ini_set('display_errors' , '1');
error_reporting(E_ALL);

// GET-Request
$name = $_GET['namn'];

// 'namn' på rad 7 kallas för nyckel/key/index/name

$age = $_GET['age'];

echo "<h1>$name</h1>";
echo "<h2>Ålder: $age</h2>";

// Skriv detta i webbläsaren
// get-request.php?namn=Mahmud&age=46

?>