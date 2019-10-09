<?php
// Skriv ut de första 10 bilder 
$url = "https://jsonplaceholder.typicode.com/albums/1/photos";
$json = file_get_contents($url);
$array = json_decode($json, true);

foreach($array as $key => $value):
    if($key == 10)
        break;
    echo "<a href='$value[url]'>";
    echo "<img src='$value[thumbnailUrl]' 
    alt='$value[title]' class='img-thumbnail'>" ;
    echo "</a>";
endforeach;