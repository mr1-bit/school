<?php
include("DatabaseConn.php");
     $id = $_POST["update"];
     echo $id;
     
     $sql = "SELECT * FROM voetballers WHERE id = $id";
                    
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
    //  if(!empty($_POST['voornaam']) && !empty($_POST['achternaam'])){
    //     $id2 = $_POST['id'];
    //     $imgUrl = $_POST['foto_url'];
    //     $name = $_POST["voornaam"];
    //     $last = $_POST["achternaam"];
    //     $date = $_POST['datum'];
    //     $sql = "UPDATE voetballers SET voornaam='$name', achternaam='$last', geboortedatum='$date', foto_url='$imgUrl' WHERE id = $id2";
    //     $result = mysqli_query($conn, $sql);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php?=select" method="Post">
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
        <input type="submit" value="update">
    </form>

 
   
</body>
<!-- 
<?php 
  if(!empty($_GET['voornaam']) && !empty($_GET['achternaam'])){
    $id = $_GET['id'];
    $imgUrl = $_GET['foto_url'];
    $name = $_GET["voornaam"];
    $last = $_GET["achternaam"];
    $date = $_GET['datum'];
    $sql = "UPDATE voetballers SET voornaam='$name', achternaam='$last', geboortedatum='$date', foto_url='$imgUrl' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
  
}
?> -->

</html>