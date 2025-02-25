<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Worst (verpakt per 6 stuks) 5 euro
    // Hamburgers (verpakt per 20 stuks) 10 euro
    // Frikandellen (verpakt per 25 stuks) 15 euro

    $worst = 5;
    $hamburgers = 10;
    $frikandelen = 15;
    $productprijzen = [$worst, $hamburgers, $frikandelen];
    $buget = 100;
    for ($i = 0; $i < 1; $i++) {
        for ($j = 0; $j < 1; $j++) {
            echo"". $buget / $frikandelen ."<br>";
            echo floor(($buget / $frikandelen) * 25) . " frikandelen" . "<br>";
            for ($k = 0; $k < 1; $k++) {
                echo ($buget / $hamburgers) * 20 . "hamburgers" . "<br>";
            }
           
           

        }

    }

  
     ?>

    
</body>
</html>