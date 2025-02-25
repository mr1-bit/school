<?php 
session_start();
include("database.php");
// $uid = 00003;
// $username = "samuel";
// $password = "";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// include("database.php");
// $sql ="INSERT INTO datab (uid, username, passwords)
//         VALUES ('$uid','$username','$hash')";
// try{
// mysqli_query($conn, $sql);
// }
// catch(mysqli_sql_exception){
//     echo"could not register";
// }

// mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sheet.css">
</head>
<header>
<nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="login.php">login/logout</a></li>
            <li><a href="signup_login_page.php">sign-up</a></li>
            <li><a href="profile.php"><?php
                if(isset($_SESSION["username"]) && $_SESSION["password"]){
                     echo $_SESSION["username"];   
                }
                else{
                null;
                $_SESSION["username"] = null;
                }
            ?></a></li>

        </ul>
    </nav>
  
    
    <hr>
</header>
<body>

<form action="home.php" method="post">
        <?php echo "post as ", $_SESSION["username"]; ?>
        <input type="text" name="text">
        <input type="submit" name="posts" value="post">
</form>
<?php
$set = $_SESSION["username"];
 $sql = "SELECT * FROM messages ORDER BY creates_at DESC LIMIT 0, 50";

 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
        
        echo $row["username"] .": ";
        echo $row["message"] ."<br>";
     
    
    }



        // array_push($arras, $row["user"], $row["message"]);
        // foreach($_SERVER  as $key => $value){
        //     echo "{$key}"  . ":" . "{$value} <br>";
        // };
        




    //  array_push($arras, $row["user"], $row["texts"]);
         // foreach($_SERVER as $key => $value){
    //     echo"{$key} = {$value} <br>";
    // }
    
    // $arras = array_reverse($arras);
    // echo $arras[1], ': ',$arras[0] . '<br>';
    // foreach($arras as $array){
    //     $num += 1;
    //     $num2 += 1;
       
    //     if($num > count($arras) - 1){
    //         null;
    //     }
       

    //     else{
    //         echo $arras[$num], ': ',$arras[$num2] . '<br>';
    //         $num += 1;
    //         $num2 += 1;
              
        
    //     }
    // }
            
 } // fix not dilpaying most recent post at index of 0 or 1 in datta base
//  else{
//      echo"no user found";
//  }}
//  catch(Exception $e){
//     echo $e->getMessage();
//  }
//  echo " <br> i:<br>";
//     foreach($arras as $key => $value){
//         echo"{$key} = {$value} <br>";
//     }

?>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_SESSION["username"])){}
    $username = $_SESSION["username"];
    $post = filter_input(INPUT_POST,"text", FILTER_SANITIZE_SPECIAL_CHARS);
    
    if(empty($post)){
        echo"please enter a message";
    }
    elseif(empty($_SESSION["username"])){
        echo "you need to be logged in to post.";
    }
    else{
        $sql = "INSERT INTO messages (username, message)
        VALUES('$username', '$post')";
        try{
            mysqli_query($conn, $sql);
            echo"you posted";
            header("Location: home.php");
        }
        catch(mysqli_sql_exception){
            echo"could not post";
            $post = null;
        }

    }
}

    // echo $_SESSION["username"];
    // echo $_SESSION["password"];

    // if(isset($_POST["logout"])){

    //  session_destroy();
    //  header("Location: index.php");
    // }

?>