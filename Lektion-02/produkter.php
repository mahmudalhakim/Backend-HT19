<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Produkter</title>
</head>
<body>
<h1>Våra produkter</h1>
<h2><a href="produkter.php?id=123&name=PC">PC</a></h2>
<h2><a href="produkter.php?id=456&name=Mac">Mac</a></h2>
<h2><a href="produkter.php?id=754&name=IPhone">iPhone</a></h2>

<h3>
    <?php 
    
    if(isset($_GET['name'])){
        echo "Mer information om ";
        echo $_GET['name']; 
    }else{
        echo "Ingen produkt finns i URLen";
    }

    ?> 
</h3>
<h4> 
    <?php
    if(isset($_GET['id']))
        echo "Artikelnummer:" . $_GET['id']; 
    ?> 
</h4>
</body>
</html>