<?php 
session_start();
$o = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="logout.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
    
</body>
</html>
<?php 
// if($_SERVER["REQUEST_METHOD"] = "post"){
//    $o +=1;

//    if($o = 2){
//     session_destroy();
//     header("Location: index.php");
//    }

    
// }
if(isset($_POST["logout"])){

     session_destroy();
     header("Location: index.php");
    }
?>