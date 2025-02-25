<?php 
session_start();
include("database.php");
if(isset($_SESSION["usrname"]) && $_SESSION["password"]){
    $a = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cool.php</title>
    <link rel="stylesheet" href="sheet.css">
</head>
<header>
<h1> <?php 
if(isset($_SESSION["username"]) && $_SESSION["password"]){
    echo"Welcome ";
    echo $_SESSION["username"];
}
else{
    echo "Welcome";
}
 ?></h1> 
   <hr>
   <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="acsite.html">about</a></li>
            <li><a href="login.php">login/logout</a></li>
            <li><a href="signup_login_page.php">sign-up</a></li>

        </ul>
    </nav>
</header>
<body>
    
   

   
</body>
</html>
<?php


    // $arras = array(1273=>"john", 8493=>"mr1", 23093=>"zyox");
    // array_flip($arras);
    // $array[8494] = "john";

    // foreach($arras as $key => $value) {
    //     echo ("{$key},  {$value}<br>");
    // }
    // $item = "frikandel";
    // $price = 3.99;
    // $quantity = $_POST["amount"];
    // $total = null;
    // $total = $quantity * $price;
    // echo"You have orderd {$quantity} x {$item}/s <br>";
    // echo"your total is \${$total}";

        //isset()
        //empty()
        // $username = "john";
        // if(isset($username)){
        //     echo "is declared ";

        // }
        // else{
        //     echo "not declared";
        // }
        // echo isset($username)

   

    // if(isset($_POST["Login"])){ 

    //     // $username = filter_input(INPUT_POST,"username", 
    //     // FILTER_SANITIZE_SPECIAL_CHARS);
    //     $username = filter_input(INPUT_POST,"username", 
    //     FILTER_VALIDATE_INT);
    //     $password = $_POST["password"];

    //     if(empty($username)){
    //         echo "bruh no user";
    //     }
    //     elseif(empty($password)){
    //         echo "you a failure";
    //     }
    //     else{
    //         foreach($_POST as $key => $value) {
    //             echo"{$key} = {$value} <br>";
    //         }
    //     }
        
    // }

    // include function pretty awsome lets you repeat pages very fast
    // include("hello.html")

    //cookies yayayayayayay!!!!!!!!!!!!!!!!!!!
    // if time -0 it no cookie me sad

    // setcookie("fav_food", "pizza", time()+ 86000 * 0.5,"/");

    // foreach($_COOKIE as $key => $value) {
    //     echo"{$key} = {$value}";
    // }


    //session global varuabel for more than 1 page posibly dik why dis code dont work prob a stupid mistake i made
    if(isset($_POST["Login"])){

        if(!empty($_POST["username"]) && 
        !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        }
        else{
            echo"btuv";
        }


    }
    
    //$_SERVER
    // foreach($_SERVER as $key => $value){
    //     echo"{$key} = {$value} <br>";
    // }
    //<?php $_SERVER["PHP_SELF"] auto updates name change could come in handy filter with html special chars
    
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     echo"hello"
    // }

    // hashing

    // =
 ?>