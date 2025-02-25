<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afstanden</title>
</head>
<body>
<form  method="POST">
    <label for="">grootheid</label>
    <select name="grootheid">
            <option value="kilometer">kilometer</option>
            <option value="hectometer">hectometer</option>
            <option value="decameter">decameter</option>
            <option value="meter">meter</option>
            <option value="decimeter">decimeter</option>
            <option value="centimeter">centimeter</option>
            <option value="milimeter">milimeter</option>
    </select>
    <label>gewenst</label>
    <select name="gewenst">
            <option value="kilometer">kilometer</option>
            <option value="hectometer">hectometer</option>
            <option value="decameter">decameter</option>
            <option value="meter">meter</option>
            <option value="decimeter">decimeter</option>
            <option value="centimeter">centimeter</option>
            <option value="millimeter">millimeter</option>
    </select>

    <label for="">number</label>
    <input type="number" name="number"> 
     <button type="submit" value="submit">ok</button> <br>
    </form>





    <?php
    $c = $_POST["grootheid"];
    $a = 0;
    $b = 0;
    $diff = 0;
    $d = $_POST["gewenst"];
    $aantal = $_POST["number"];
    echo $c .' ' . $d .  '<br>';

    switch($c) {
        case "kilometer":
            $a = 1;
            break;
        case "hectometer":
            $a = 2;
            break;
        case "decameter":
            $a = 3;
            break;
        case "meter":
            $a = 4;
            break;
        case "decimeter":
            $a = 5;
            break;
        case "centimeter":
            $a = 6;
            break;
        case "millimeter": 
            $a = 7;
            break;
    }
    
    switch($d) {
        case "kilometer":
            $b = 1;
            break;
        case "hectometer":
            $b = 2;
            break;
        case "decameter":
            $b = 3;
            break;
        case "meter":
            $b = 4;
            break;
        case "decimeter":
            $b = 5;
            break;
        case "centimeter":
            $b = 6;
            break;
        case "millimeter":
            $b = 7;
            break;
        default: 
            echo "Unknown unit: " . $d;
            break;
    }
        if ($a > $b) {
            $diff = $a - $b;
            $aantal2 = (int)$aantal / 10 ** $diff;
            echo $aantal2 . '<br>';

        }
        elseif ($a < $b) {
            $diff = $b - $a;
            $aantal2 = (int)$aantal * 10 ** $diff;
            echo  "je aantal is" .  $aantal2 . '<br>';

            
        }
       



     ?>
    
</body>
</html>