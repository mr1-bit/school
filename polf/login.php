<?php
session_start();
include("database.php");


if(isset($_SESSION["username"]) && $_SESSION["password"]){
    echo"you are alredy logged in";
    header("Location: logout.php");
}

else{

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

</header>


<body>

<h2>welcome to the login page</h2>

<form action="login.php" method="post">
    <h4>username</h4>
    <input type="text" name="username"><br>
    <h4>password:</h4>
    <input type="password", name="password"><br>
    <input type="submit" name="submit", value="login">
    </form>
</body>
</html>

<?php


if(isset($_POST["submit"])){

   $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username)){
        echo "please enter a username" . '<br>';
    }
    elseif(empty($password)){
        echo "please enter a password" . '<br>';
    }
    else{ 
       echo "something went wrong";
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        
            if(password_verify($password, $row["password"])){
                echo "hi " . "<br>";
                $_SESSION["username"] = $username;
                //replace with token instead lol very unsave to have the password stored
                $_SESSION["password"] = $password;
                header("Location: index.php");
                
            }
            else{
                echo "wachtwoord klopt niet";
            }
        }
    }
    else{
        echo"no user found ";
    }
    mysqli_close($conn);
}
}


    

?>