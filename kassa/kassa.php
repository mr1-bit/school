<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
    <label for=""></label>
    <input type="number" name="aantal1">
    <label for=""></label>
    <input type="number" name="aantal2">
    <label for=""></label>
    <input type="number" name="aantal3">
    <label for=""></label>
    <input type="number" name="betaalbedrag">
</form>
    <?php 
    $a = 0;
    $b = 0;
    $c = 0;
    $totaal = $a + $b + $c;
    echo "Totaal is " . $totaal;


     $d = 0; // met hoveel de user betaald / aantal  op rekening
     $e = $d - $totaal;
     echo "er blijft " . $d . " over";

     $betaalbedrag = 0; //pas aan met input uit html
     if ($betaalbedrag > $totaal) {
        $aantalterug = $betaalbedrag - $totaal;
        echo "je krijgt" . $aantalterug . "terug";
     }
     elseif ($betaalbedrag < $totaal) {
        echo "je bent te arm. rip bozo";
     }


    
    
    
    ?>
</body>
</html>