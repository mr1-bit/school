<?php 

session_start();

$numbers = array(0 => "groen",  1 =>"rood",  2 => "black", 3 =>"rood", 4 => "black", 5=> "rood", 6 => "black",7  => "rood" , 8 => "black", 9 => "rood" , 10 => "black", 11 => "black" ,12 => "rood", 13 => "black", 14=>"rood",15 => "black",16 => "rood",17 => "black", 18 =>"rood", 19 =>"rood",20 => "black",
21 =>"rood",22 => "black",  23=>  "rood" ,24 => "black", 25 =>"rood",26 => "black", 27 => "rood",
 28 => "black" , 29 => "black", 30 =>"rood", 31 => "black", 32 => "rood",33 => "black", 
 34 =>"rood",35 => "black", 36 => "rood");

$key =  array_rand($numbers);
$_SESSION["balance"] = 10000000;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <form action="" method="post">
        <label for="">bet</label>
        <input type="text", name="bet"><br>     
        <label for="">bet amount</label>
        <input type="number", name="number"><br>
        <input type="submit" id="submit" name="submit", value="Spin!">
    </form>


    <?php
    // if(isset($_POST["number"])) {
    //     $balance -= (int)($_POST["number"]);
    // }
  
   if($_SESSION["balance"]  <= 0){
    $_SESSION["balance"]  = 0;
 
   }
   echo $_SESSION["balance"]  . "<br>";
   if($_POST["bet"] == "odd"){
       if($key % 2){
        $_SESSION["balance"] += (int)$_POST["number"];
        echo "win balance incrased " . $_POST["number"]. " current balance = " .  $_SESSION["balance"];
       }else{
        $_SESSION["balance"] -= (int)$_POST["number"];
        echo $_SESSION["balance"]  . "-1";
        echo $key;
       }
   }

   elseif($_POST["bet"] == "even"){
    
    if($key % 2){
        $_SESSION["balance"]  += (int)$_POST["number"];
    echo $_SESSION["balance"]  . " even";
    }
    else{
        $_SESSION["balance"]  -= (int)$_POST["number"];
         echo $_SESSION["balance"]  . " odd";
         echo $key;
        }
   }
   elseif($_POST["bet"] == "rood"){
        if($numbers[$key] == "rood"){
            $_SESSION["balance"]  += (int)$_POST["number"];
            echo $_SESSION["balance"]  . " rood";
        }
        else{
            $_SESSION["balance"] -= (int)$_POST["number"];
            echo $_SESSION["balance"] . " het was zwart";
            echo $numbers[$key];
        }
   }
   elseif($_POST["bet"] == "zwart"){
    if($numbers[$key] == "black"){
        $_SESSION["balance"]  += (int)$_POST["number"];
        echo $numbers[$key] . "<br>";
        echo $_SESSION["balance"]  . " zwart";
    }
    else{
        $_SESSION["balance"]  -= (int)$_POST["number"];
        echo $_SESSION["balance"]  . " het was rood " . "<br>";
        echo $numbers[$key];
    }
   }

   else{

    if((int)$_POST["number"] == $key){
        $_SESSION["balance"]  += (int)$_POST["number"] * 35;
        echo "win balance incrased " . $_POST["number"]. " current balance = " .  $_SESSION["balance"] ;
    }
    else{
        $_SESSION["balance"]  -= (int)$_POST["number"];
        echo "loss balance decreased " . $_POST["number"]. " current balance = " .  $_SESSION["balance"]  . "<br>";
        echo $key;
    }
   }


    ?>
</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image with Buttons</title>
    <style>
        .image-container {
            position: relative;
            width: 500px; /* Set the desired width */
        }

        img {
            width: 100%; /* Image fills the container */
            height: auto;
        }

        .button {
            position: absolute;
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
        }

        /* Positioning the buttons at different locations */
        #btn1 {
            top: 20px;  /* Adjust the position */
            left: 30px;
        }

        #btn2 {
            top: 150px;
            left: 100px;
        }

        #btn3 {
            top: 250px;
            left: 200px;
        }

        #btn4 {
            top: 350px;
            left: 350px;
        }
    </style>
</head>
<body>

    <div class="image-container">
        <img src="image.jpg" alt="Sample Image">
        <button id="btn1" class="button">Button 1</button>
        <button id="btn2" class="button">Button 2</button>
        <button id="btn3" class="button">Button 3</button>
        <button id="btn4" class="button">Button 4</button>
    </div>

</body>
</html> -->
