<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $t = localtime(time(),true);
    echo $t['tm_mday'] . '/' . $t['tm_mon'] + 1 .'/'. $t['tm_year'] + 1900 . "<br>";
    echo $t['tm_hour'] . ':' . $t['tm_min'] . ':' . $t['tm_sec'];
    header("refresh: 1;");
   

    ?>
    
</body>
</html>