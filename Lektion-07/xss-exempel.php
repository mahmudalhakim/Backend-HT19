<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS - Exempel</title>
</head>
<body>
    <h1>XSS - Exempel</h1>
    <h3>Anmäl dig till vårt nyhetsbrev</h3>
    <form action="#" method="POST">
        <input type="text" name="epost"> <br>
        <input type="submit" value="Anmäl mig nu">
    </form>

    <?php
        $epost = ($_POST['epost']) ?? ""; 
        // Ange ett defaultvärde med ??
        
        // Ändra HTML-taggar till entiter
        $epost = htmlspecialchars($epost);

        echo "<h2>Vi har fått följande e-post <br>";
        echo $epost;
        echo "</h2>";
    ?>
</body>
</html>