<?php 
session_start();
include("database.php");

?>
<!-- <?= $one ?> .= plakt shit en /one  prints shit but fast -->


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
            <li><a href="profile.php" id="active"><?php
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

        <?php
        echo $_SESSION["username"] . "<br>";
        echo "post made by you: <br>";
        $set = $_SESSION["username"];
        $sql = "SELECT * FROM messages WHERE user = '$set'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
               echo $row["user"] .": ";
               echo $row["message"] ."<br>";}}
         ?>
</form>
