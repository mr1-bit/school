<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
        <label for="">numbers</label>
        <input type="text" name="num"> 
        <button type="submit" value="submit">ok</button> <br>
    </form>

    <?Php
    $one = "<p>
    xxx <br>
    &nbsp &nbsp  x <br>
    &nbsp &nbsp x <br>
    &nbsp &nbsp x <br>
    &nbsp   xxx 

    </p>";
    $two = "<p>
      xxx <br>
    &nbsp &nbsp  x <br>
     xxx <br>
     x <br>
     xxx <br>
    </p>
    
    ";
    
    $tr = "<P>
        xxx <br>
        &nbsp &nbsp x <br>
        xxx <br>
         &nbsp &nbsp x <br>
        xxx</p>";
    $four = "<p>
    x &nbsp &nbsp x <br>
    x &nbsp &nbsp x <br>
    xxxx <br>
    &nbsp &nbsp &nbsp x <br>
    &nbsp &nbsp &nbsp  x <br>
    &nbsp &nbsp &nbsp  x 
       </p>
    
    ";

    $five = "
    <p> 
     xxxx <br>
     x <br>
     xxx <br>
     &nbsp &nbsp  xx <br>
      &nbsp &nbsp &nbsp    x <br>
      xxxx 
    
        </p
    ";
    $six = "
    <p>
    xxxx <br>
    x <br>
    xxxxx <br>
    x &nbsp  &nbsp  &nbsp  x <br>
    x &nbsp  &nbsp  &nbsp   x <br>
    xxxxx 
    </p>
    ";
    $seven = "
    <p> 
    xxxxxx <br>
    &nbsp  &nbsp  &nbsp  &nbsp  x <br>
     &nbsp  &nbsp  &nbsp   x <br>
    &nbsp  &nbsp   x <br>
    &nbsp  x 

    </p>
    ";
    $acht = "
    xxxxx <br>
    x &nbsp &nbsp &nbsp   x <br>
    x &nbsp &nbsp &nbsp  x <br>
    xxxxx <br>
    x  &nbsp &nbsp &nbsp  x <br>
    x  &nbsp &nbsp &nbsp  x <br>
    xxxxx <br>
    ";

    $negen = "
    xxxxx <br>
    x &nbsp &nbsp &nbsp   x <br>
    x &nbsp &nbsp &nbsp  x <br>
    xxxxx <br>
     &nbsp &nbsp &nbsp  &nbsp  x <br>
     &nbsp &nbsp &nbsp  &nbsp  x <br>
    xxxx 
    <br>
    ";
    $zero = "
    
     xxxxxx <br>
    x &nbsp &nbsp &nbsp   x <br>
    x &nbsp &nbsp &nbsp  x <br>
    x &nbsp &nbsp &nbsp x <br>
    x  &nbsp &nbsp &nbsp  x <br>
    x  &nbsp &nbsp &nbsp  x <br>
    xxxxxx 
    <br>
    
    ";

    $number3 = [];
    $uhu = explode(",", $_POST["num"]);
    foreach ($uhu as $v) {
        echo $v;
        array_push($number3, $v);
    }

  
   
    
    foreach ($number3 as $number2) {
        switch ($number2) {
            case 1: echo $one;
            break;
            case 2: echo $two;
            break;
            case 3: echo $tr;
            break;
            case 4: echo $four;
            break;
            case 5: echo $five;
            break;  
            case 6: echo $six;
            break;
            case 7: echo $seven;
            break;
            case 8: echo $acht;
            break;  
            case 9: echo $negen;
            break;
            case 0: echo $zero;


        }
        echo"all numbers in order top down";
        
    }


    ?>
    
</body>
</html>