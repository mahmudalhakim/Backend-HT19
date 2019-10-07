<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär med GET och POST</title>
</head>
<body>
    <h1>Formulär med GET och POST</h1>

    <form action="?id=12345" method="POST">
    <p>
    Ange förnamn <br> 
    <input type="text" name="firstname"> 
    </p>

    <p>
    Ange efternamn <br> 
    <input type="text" name="lastname"> 
    </p>

    <input type="submit" value="Skicka">
    </form>


    <?php
    if(isset($_POST['firstname']) && isset($_POST['lastname']) ){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        echo "<h1>Hej $firstname $lastname</h1>";
    }
    else
        echo "<h1>Hej Gäst</h1>";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo "<h2>Ditt ID-nummer är $id</h2>";
    }

    // Testa POST
    echo "<pre>My POST-";
    var_dump($_POST); 
    // var_dump visar mer info om data som finns i arrayern
    echo "</pre>";

    // Testa GET
    echo "<pre>My GET-";
    var_dump($_GET); 
    echo "</pre>";
    ?>
</body>
</html>