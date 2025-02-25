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
       
              <?php 
                
                     $sql = "SELECT * FROM voetballers";
                    
                     $result = mysqli_query($conn, $sql);
                 
                     echo "<table>";
                     while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo "<td> <img style='width:50px;' id='img' src=images/" . $row["foto_url"]. ">" . "</td>" .
                        "<td>" . $row['voornaam'] . "</td>" . 
                        "<td>" . $row['achternaam'] . "</td>" . 
                         "<td>" . $row['geboortedatum'] . "</td>" .
                        "<td>" . 
                            '<form method="post" action="">
                               <button type="submit" name="delete" value="' . $row['id'] . '">delete</button>
                             </form>' 
                        . "</td>" . 
                        "<td>" . 
                            '<form method="post" action="index.php?page=update">
                               <button type="submit" name="update" value="' . $row['id'] . '">update</button>
                             </form>' 
                        . "</td>";
                   echo "</tr>";
                     }
                     echo "</table>";

                     
                     if(!empty($_POST["delete"])){
                        $id = $_POST["delete"];
                        $sql = "DELETE FROM voetballers WHERE id = $id";
                        $result = mysqli_query($conn, $sql);
                        
                     }
                     if (!empty($_POST["update"])) {
                        # code...
                     }
                     
                 
                     mysqli_close($conn);
                     ?>
     




</body>
</html>