
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$boven = 0;
$inrange = true;
$onder = 0;
$gem_len = 0;
$lengtes = ["160", "175", "180", "169", "172"];

foreach($lengtes as $x){
    if ($x > 170 && $x < 250){
        $boven += 1;
        $gem_len += $x;
    }
    elseif($x <= 50){
        echo"De lengte is buiten range, probeer opnieuw."  . "<br>";
        $inrange = false;
        break;
    }
    elseif($x >= 250){
        echo"De lengte is buiten range, probeer opnieuw." . "<br>";
        $inrange = false;
        break;
    }
    else{
        $onder += 1;
        $gem_len += $x;
    }
}

if($inrange){
    $gem_len = $gem_len / ($onder + $boven);

    echo "Er zijn {$boven} mensen langer dan 170 cm." . "<br>";
    echo"Er zijn {$onder} mensen kleiner dan 170 cm." . "<br>";
    echo "De gemiddelde lengte is {$gem_len} cm" . "<br>";

    }
?>
</body>
</html>



