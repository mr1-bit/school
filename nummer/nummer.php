

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
        <label for="">number</label>
        <input type="number" name="guess"> 
        <button type="submit" value="submit">ok</button> <br>
    </form>


    <?php 
    $g = ''; //  replace  with number input
    if($g >= 7){
        echo'l, 6';
    }
    else{

    $numb = rand(1, 6);
    
    if($g == $numb){
        echo '';
    }
    else{
        echo '';
    }
}

    ?>
</body>
</html>