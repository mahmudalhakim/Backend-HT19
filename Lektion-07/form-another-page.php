<?php
    if(isset($_POST['firstname']) && isset($_POST['lastname']) ){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        echo "<h1>Hej $firstname $lastname</h1>";
    }
    else
        echo "<h1>Error: Unauthorized Entry </h1>";


    // Testa POST
    echo "<pre>My POST-";
    var_dump($_POST); 
    echo "</pre>";


?>