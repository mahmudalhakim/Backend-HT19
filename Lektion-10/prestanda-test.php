<?php
header("Content-Type: text/html; charset=UTF-8");

$firstNames = ["Mahmud","Kalle","Erik","Adam","Fredrik","Astrid" ,"Yasmin","Sara","Maria","Åsa"];
$lastNames = ["Al Hakim","Öberg","Ericsson","Anka","Söderberg","Gustavsson","Nilson","Lindgren","Nyström","Hakimson"];

$limit = 100000; // Defaultvärde
if(isset($_GET["limit"])){
    $limit = $_GET["limit"];
}

echo "<h2>START TEST 1 (with json_encode)</h2>";
$startTestTime =  microtime(true) * 1000; 

$names = [];

for($i=0 ; $i<$limit ; $i++):

    $randFN = rand(0,9);
    $randLN = rand(0,9);

    $name = array(
        "firstname" => $firstNames[$randFN],
        "lastname"  => $lastNames[$randLN]
    );
    $names[] = $name;

endfor;

$json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
// echo ($json);

$finishTestTime = microtime(true) * 1000;
echo "<h3>" . round($finishTestTime - $startTestTime) . " milliseconds </h3>";

echo "<h2>FINISH TEST 1</h2>";

echo "<hr>";

echo "<h2>START TEST 2 (without json_encode)</h2>";
$startTestTime =  microtime(true) * 1000; 

$namesJSON = "[";
for ($i=1; $i <= $limit; $i++) { 
    $randFN = rand(0,9);
    $randLN = rand(0,9);

    $firstname = $firstNames[$randFN];
    $lastname  = $lastNames[$randLN];
    
    $name = "{\"firstname\" : \"$firstname\",\"lastname\" :\"$lastname\"}";
    
    if($i != $limit)
        $name .= ",";
        
    $namesJSON .= $name;
}
$namesJSON .= "]";
//echo $namesJSON;

$finishTestTime = microtime(true) * 1000;
echo "<h3>" . round($finishTestTime - $startTestTime) . " milliseconds </h3>";

echo "<h2>FINISH TEST 2</h2>";