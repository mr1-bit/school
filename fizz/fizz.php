<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 1; $i < 10000; $i++) {
        echo $i;
        if (is_int($i / 3)){
            echo ": fizz ";
        }
        if (is_int($i / 5)){
            echo  ": buzz ";
        }
        echo"<br>";
    }
  
    
    ?>
</body>
</html>