<?php 
include("DatabaseConn.php");
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
        
    <div id="container">    
        <div id="header">
            <h1></h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php?page=home">home</a></li>
                <li><a href="index.php?page=insert">insert</a></li>
                <li><a href="index.php?page=select">select</a></li>
            </ul>
            <hr>
        </nav>
      
        <div id="main">

              <div class="content">
                <?php
                  $page = "home";
                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }
          
                  include($page. ".php");   

             ?>
            </div>
        </div>
    </div>

    


</body>
</html>