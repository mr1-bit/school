<?php
include("DatabaseConn.php");
  $id = $_POST["update"];
     
     $sql = "SELECT * FROM artist WHERE id = $id";
                    
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
        <label for="">name:</label>
        <input type="text" name="name" value="<?= $row["name"]?>" id="">
        <br>
        <label for="">country:</label>
        <input type="text" name="country" value="<?= $row["country"]?>" id="">
        <br>
        <input type="submit" value="Update">
    </form>

    <?php 
   

    //  if(!empty($_POST['name']) && !empty($_POST['country'])){
    //     $name = $_POST["name"];
    //     $country = $_POST["country"];
    //     $sql = "UPDATE artist SET name='$name', country='$country' WHERE id = $id";
    //     $result = mysqli_query($conn, $sql);
    //     header("Location: index.php?page=select");
    //  }
    
    
    ?>
 
   
</body>

</html>