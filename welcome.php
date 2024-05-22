<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["txtfirstname"];
        $name2=$_POST["textsecondname"];
        echo "<h2>WELCOME TO MY SITE $name $name2</h2>";

    }
    
    ?>
</body>
</html>