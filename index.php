

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   


    <?php
    $index = 0;
    $main_dir = scandir("./");
   foreach ($main_dir as $file) {
        if(!str_contains($file, '.')){
         $phpmains = scandir('./'. $file);
         $fullstring = $file . '/' . $file . ".php";
         echo "<a href='$fullstring'>$file </a> <br>";
        }
   }
    
    
    ?>
    
</body>
</html>

