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
                <li><a href="home.php">home</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="select.php">select</a></li>
            </ul>
            
        </nav>
       
        <div id="main">

              <div class="content">
                <br>
                <br>
              <?php 
                
                     $sql = "SELECT * FROM artist";
                     $result = mysqli_query($conn, $sql);
                 
                     echo "<table>";
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr>";
                         echo "<td>" . $row['name'] . "</td>" . "<td>" . $row['country'] . "</td>";
                         echo "</tr>";
                      
                     }
                     echo "</table>";
                 
                     mysqli_close($conn);
                     ?>
            </div>
     </div>


        <div id="footer"><h1>Copyright</h1></div>
   




</body>
</html>