<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Validering</title>
</head>
<body>
    <h1>Frontend Validering</h1>
    <h3>Anmäl dig till vårt nyhetsbrev</h3>
    <form action="#" method="POST">
        <input type="email" name="epost" required> <br>
        <input type="submit" value="Anmäl mig nu">
    </form>

    <?php

    if(isset($_POST['epost'])):
        
        $epost = ($_POST['epost']); 
    

        // Validate e-mail
        // https://www.w3schools.com/php/php_filter.asp
        if (!filter_var($epost, FILTER_VALIDATE_EMAIL) === false) {
            echo("<h2>$epost is a valid email address</h2>");
            echo "<h2>Vi har fått följande e-post <br>";
            echo $epost;
            echo "</h2>";
        } else {
            echo("<h2>$epost is not a valid email address</h2>");
        }
        

    endif;
    ?>
</body>
</html>