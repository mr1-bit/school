

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="bmi.php" method="POST">
        <label for="">gewicht in kg</label>
        <label for="gewicht"></label>
        <input type="number" name="gewicht"> <br>
        <label for="">lengte in cm</label>
        <input type="number" name="lengte"> 
        <button type="submit" value="submit">ok</button> <br>
    </form>
    <?php
    // gewicht delen door l in m2
     $a = $_POST["gewicht"];
     $b = $_POST["lengte"];
     $c  = $a / (($b / 100) * ($b / 100));

    echo 'BMI: ' .  $a / $c;

    if($c < 18.5 ) echo' ondergewicht'. '<br>';
    if($c >= 18.5 && $c < 25) echo' gezond'. '<br>';
    if($c >= 25 && $c < 30) echo' ondergewicht'. '<br>';
    if($c >= 30) echo' obesitas'. '<br>';
   
  
    ?>


</body>
</html>