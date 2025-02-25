





<html>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <header>
    <h1>uhu</h1>
    <hr>
 </header>
 <body>
    <form action="" method="POST">
        <label for="">dice</label>
        <input type="number" name="dice"> <br>
        <button type="submit" value="submit">roll</button> <br>
    </form>
   
 </body>
 </html>
</html>
<?php 

$max = $_POST["dice"];
(int) $max = isset($_POST["dice"]) ? $_POST["dice"] : 0;

if(isset($max)){
    echo rand(1, $max);
}


?>


