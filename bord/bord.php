<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $aantal = 10;
    for ($i = 0; $i < $aantal; $i++) {
        echo '<div style="width : 10px; height : 10px; color: rgb(0, 0, 255);"> </div>';
        for ($j = 0; $j < $aantal; $j++) {
            echo '<div style="width : 10px; height : 10px; color: rgb(0, 0, 255);"> </div>';
        }

    }
    
    ?>
    
</body>
</html>