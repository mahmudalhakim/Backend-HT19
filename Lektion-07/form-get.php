<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär med GET</title>
</head>
<body>
    <h1>Formulär med GET</h1>

    <form action="#" method="GET">
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
    if(isset($_GET['firstname']) && isset($_GET['lastname']) ){
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        echo "<h1>Hej $firstname $lastname<h1>";
    }
    else
        echo "<h1>Hej Gäst</h1>";
    ?>
</body>
</html>