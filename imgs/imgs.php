<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $s = scandir("imgs2");
       foreach ($s as $file) {
             $fullstring = $file;
             echo $fullstring;
             echo "<img scr='$fullstring'> <br>";
       }
        
    
    ?>
    <img src="istockphoto.jpg" alt="">
    <!-- !fix image loading -->

</body>
</html>