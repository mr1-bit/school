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
<div id="container">
            <div id="header">
                <div class="image"><img src="img/kerstboom.png" alt="kerstboom" id="img1"></div>
                <div> <h1>koptekst</h1></div>
                <div class="image"><img src="img/sneeuw.png" alt="sneewflok" id="img2"></div>
            </div>

            <div id="main">
                <div class="sidebar">
                    <h3>waneer</h3>
                    <h4>20-12-2024</h4>
                    <h4>16:00 - 20:00</h4> <br>
                    <h3>waar</h3>
                    <h4>deltion college</h4> 
                    <h4>Gebouw groen</h4> 
                    <h4>Lokaal 2.099</h4> 
                    <h4>8031 AA Zwolle/h4> 
                </div>
                <div class="content">
                    <h3>SD borrel</h3>
                    <H4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolor vitae cum earum quasi! Reiciendis, libero voluptas similique perspiciatis deserunt quibusdam exercitationem officiis porro. Veniam quos libero nam impedit! Qui.</H4>
                    <br>
                    <h4 id="textred">dit is een nep bericht is</h4>
                </div>
                 <div class="sidebar">aanmelden voor borrel
                    <form action="" method="post">
                        <label for="">naam:</label>
                        <input type="text" placeholder="voor en achternaam" name="naam"> 
                        <label for="">email-adres:</label>
                        <input type="text" name="email">
                        <label for="">vegentarisch: </label>
                        <label for="rad">ja</label>
                        <input type="radio" name="rad" id="Ja">
                        <label for="rad">nee</label>
                        <input type="radio" name="rad" id="nee">
                        <hr>
                        <input type="checkbox" name="check" id="boontjes">
                        <label for="">boontjes</label>
                        <br>
                        <input type="checkbox" name="check" id="sla">
                        <label for="">sla</label>
                        <br>
                        <input type="checkbox" name="check" id="wortels">
                        <label for="">wortels</label>
                        <br>
                        <input type="checkbox" name="check" id="bloemkool">
                        <label for="">bloemkool</label>
                        <br>
                        <input type="submit" name="submit" value="meld mij aan">
                    </form>
                 </div>
            </div>


    </div>
    <?php
   
    if(isset($_POST["naam"]) & isset($_POST["email"])){
        $_SESSION["naam"] = $_POST["naam"];
        $_SESSION["email"] = $_POST["email"];
        header("Location: verzend.php");
    }
  
     ?>
</body>
</html>
