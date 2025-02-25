<?php
include("DatabaseConn.php");
  $id = $_POST["update"];
     
     $sql = "SELECT * FROM voetballers WHERE id = $id";
                    
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
        <label for="">id</label>
        <input readonly type=" text" name="id" value="<?= $row["id"]?>" id="">
        <br>
        <label for="">foto_url</label>
        <input type="text" name="foto_url" value="<?= $row["foto_url"]?>" id="">
        <br>
        <label for="">voornaam</label>
        <input type="text" name="voornaam" value="<?= $row["voornaam"]?>" id="">
        <br>
        <label for="">achternaam</label>
        <input type="text" name="achternaam" value="<?= $row["achternaam"]?>" id="">
        <br>
        <label for="">datum</label>
        <input type="date" name="datum" value="<?= $row["geboortedatum"]?>" id="">
        <br>
        <input type="submit" value="Update">
    </form>

 
   
</body>

</html>