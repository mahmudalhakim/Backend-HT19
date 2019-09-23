<?php
// Visa alla felmeddelanden
ini_set('display_errors' , '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Echo Demo</title>
</head>
<body>
    <?php
        echo "<h1>Echo Demo</h1>";
        echo "<p>Här kommer en radbrytning,<br>
            Lite text på rad 2 i samma stycke.</p>";
        print "<p>Du kan använda print istället för echo.</p>";
    ?>

    <?= "<p>Detta är en förkortad syntax på echo.</p>" ?>
</body>
</html>