<?php 
    include("main.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style> move to css file later
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
} -->
</style>
</head>
<body>
    <?=$nav ?>


    <form action="" method="GET">
        <a href="index.php?b=" name="a">refresh</a>
        <button name="a">ddttta</button>
    </form>

    <?php
    if (empty($_GET)) {
       echo $home;
        }

    elseif (isset(($_GET["a"]))) {
        echo "hello";
    }
    elseif (isset(($_GET["b"]))) {
        echo $contents;
    }

    else{
        
    }

    // include "index\test.php"
    ?>

</body>
</html>