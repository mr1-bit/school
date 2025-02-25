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
                  // idk why, maar de code werkt niet als ik het in een aparte pagina doe. lol
                  include($page. ".php");
                      if (empty($_GET["voornaam2"]) && empty($_Get["achternaam2"])) {
                      echo '<script>console.log("enter data to insert")</script>' ;
                    }
                    elseif(!empty($_GET["voornaam2"])){
                        include("DatabaseConn.php");
                        $foto = $_GET['foto_url2'];
                        $name = $_GET['voornaam2'];
                        $last_name = $_GET['achternaam2'];
                        $date = $_GET['geboortedatum2'];

                        $sql = "INSERT INTO voetballers (foto_url, voornaam, achternaam, geboortedatum) VALUES('$foto', '$name', '$last_name', '$date')";
                        mysqli_query($conn, $sql);
                        // header("Location: index.php?page=select");
                   
        
                    }
                    if(!empty($_GET['voornaam']) && !empty($_GET['achternaam'])){
                        // idk wat ik aan het doen ben lol, maar het werkt
                        include("DatabaseConn.php");
                        $id = $_GET['id'];
                        $imgUrl = $_GET['foto_url'];
                        $name = $_GET["voornaam"];
                        $last = $_GET["achternaam"];
                        $date = $_GET['datum'];
                        $sql = "UPDATE voetballers SET voornaam='$name', achternaam='$last', geboortedatum='$date', foto_url='$imgUrl' WHERE id = $id";
                        $result = mysqli_query($conn, $sql);
                        header("Location: index.php?page=select");
                        // ok idk what gaande is meer heb op gegeven om het te fixen het werkt gewoon okal is het niet zoals bedoeld
                        
                        
                      
                     }
                    
                
                
                   ?>
            </div>
        </div>


        <div id="footer"><h1>Copyright</h1></div>
    </div>

    


</body>
</html>