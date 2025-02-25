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
            <h1>Artiesten</h1>
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
                  // idk why, maar de code werkt niet als ik het in een aparte pagina doe.
                  include($page. ".php");
                      if (empty($_GET["name2"]) && empty($_Get["country2"])) {
                      echo '<script>console.log("enter data to insert")</script>' ;
                    }
                    else{
                        $name = $_GET['name2'];
                        $country = $_GET['country2'];

                        $sql = "INSERT INTO  (name, country) VALUES('$name', '$country')";

                        mysqli_query($conn, $sql) ;
                        header("Location: index.php?page=select");
  
                    }
                    if(!empty($_GET['name']) && !empty($_GET['country'])){
                        $id = $_GET['id'];
                        $name = $_GET["name"];
                        $country = $_GET["country"];
                        $sql = "UPDATE artist SET name='$name', country='$country' WHERE id = $id";
                        $result = mysqli_query($conn, $sql);
                        
                        header("Location: index.php?page=select");
                     }

                
                
                   ?>
            </div>
        </div>


        <div id="footer"><h1>Copyright</h1></div>
    </div>

    


</body>
</html>