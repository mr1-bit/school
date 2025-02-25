<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $studenten = array(158 => "Klaas",  252 => "Achmed", 397 => "Janien", 408 => "René");

    echo "Key: &nbsp  &nbsp  Voornamen:" . "<br>";

    foreach ($studenten as $key => $value) {

        echo "{$key}  &nbsp  &nbsp  &nbsp  {$value}" . "<br>";
    }
    
    
    ?>
</body>
</html>