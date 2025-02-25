<?php
include("DatabaseConn.php")
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
    <label for="">voornaam</label>
        <input type="text" name="voornaam2">
        <label for="">achternaam</label>
        <input type="text" name="achternaam2">
        <label for="">geboortedatum</label>
        <input type="date" name="geboortedatum2">
        <label for="">image url</label>
        <input type="text" name="foto_url2">
        <input type="submit" value="Verzenden">
    </form>
</body>

</html>
<?php 
    if (!empty($_GET["voornaam2"])) {
        $foto = $_GET['foto_url2'];
        $name = $_GET['voornaam2'];
        $last_name = $_GET['achternaam2'];
        $date = $_GET['geboortedatum2'];

        $sql = "INSERT INTO voetballers (foto_url, voornaam, achternaam, geboortedatum) VALUES('$foto', '$name', '$last_name', '$date')";
        mysqli_query($conn, $sql);
    }
    ?>
    
       








</html>