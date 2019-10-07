<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär med POST</title>
</head>
<body>
    <h1>Formulär med POST</h1>

    <form action="#" method="POST">
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

    // Testa POST
    echo "<pre>My POST-";
    print_r($_POST);
    echo "</pre>";
    ?>
</body>
</html>