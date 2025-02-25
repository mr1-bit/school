


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
    <form action="tafels.php" method="POST">
        <label for="">tafel</label>
        <input type="number" name="tafel"> <br>
        <label for="">begin</label>
        <input type="number" name="begin"><br>
        <label for="">eind</label>
        <input type="number" name="eind"> 
        <button type="submit" value="submit">bereken</button> <br>
    </form>
   
 </body>
 </html>
</html>
<?php 

(int) $tafel = isset($_POST["tafel"]) ? $_POST["tafel"] : 0;
(int) $begin = isset($_POST["begin"]) ? $_POST["begin"] : 0;
(int) $eind = isset($_POST["eind"]) ? $_POST["eind"] : 0;


for ($x = $begin; $x <= $eind; $x++) {
   echo $x * $tafel . "<br>";
   
}



?>

