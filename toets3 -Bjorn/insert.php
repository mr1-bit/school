<?php
include("DatabaseConn.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
        
<div id="container">
        <div id="header">
            <h1>Artiesten</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="select.php">select</a></li>
            </ul>
           
        </nav>
       
        <div id="main">

              <div class="content">
                
                <form action="">
                    <label for="">name</label>
                    <input type="text" name="name">
                    <label for="">country</label>
                    <input type="text" name="country">
                    <input type="submit" value="submit">
                    </form>
              <?php 
                    if (empty($_GET["name"]) && empty($_Get["country"])) {
                        echo "please enter before submit";
                    }
                    else{
                        $name = $_GET['name'];
                        $country = $_GET['country'];

                        $sql = "INSERT INTO artist (name, country) VALUES('$name', '$country')";

                        if (mysqli_query($conn, $sql)) {
                            header("location: select.php");
                        }
                    }
                    ?>
            </div>
     </div>


        <div id="footer"><h1>Copyright</h1></div>
   

 
</body>
</html>