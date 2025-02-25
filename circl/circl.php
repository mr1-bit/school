
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
    <form action="index.php" method="POST">
        <label for="">number</label>
        <input type="number" name="button"> 
        <button type="submit" value="submit">ok</button> <br>
    </form>
   
 </body>
 </html>
</html>
<?php 
(int) $a = $_POST["button"];
echo $a * pi() . "<br>";
echo ($a /4) ** $a * pi();