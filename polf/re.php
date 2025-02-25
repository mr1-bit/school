<?php 
    include("database.php");
    $sql = "SELECT * FROM messages WHERE user = 'Hexed'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo $row["user"] ."<br>";
        echo $row["message"] ."<br>";}
        
    }
    else{
        echo"no user found";
    }

    mysqli_close($conn);

   
    

?>