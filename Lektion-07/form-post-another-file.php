<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Skicka data till en annan fil </title>
</head>
<body>
    <h1>Skicka data till en annan fil</h1>

    <form action="form-another-page.php" method="POST">
    <p>
    Ange förnamn <br> 
    <input type="text" name="firstname"> 
    </p>

    <p>
    Ange efternamn <br> 
    <input type="text" name="lastname"> 
    </p>

    <input type="hidden" name="id" value="12345">

    <input type="submit" value="Skicka">
    </form>

</body>
</html>