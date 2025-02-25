<?php
session_start();
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
<div id="header2">
            <div class="image"><img src="img/kerstboom.png" alt="kerstboom" id="img3"></div>
            <div id="textpage"> 
                <h1 id="textpage2">welkom  &nbsp </h1>
                <h1 id="verzend"><?php echo $_SESSION["naam"] . " &nbsp "; ?></h1>
                <h1 id="verzend"><?php echo $_SESSION["email"];?></h1>
              
            </div>
        </div>

</body>
</html>
