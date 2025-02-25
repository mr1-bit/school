<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // basic array
    $fruits = ["apple", "banana", "pear", "cherry"];
    $s = array("sasas", "jagdyuats79d");
    // echos 1 element of array on index
    echo $fruits[0];
    // adds data to array at end if no number is used otherwise it replaces item at index
    $fruits[1] = "orange";
    echo $fruits[4];
    // delete data from array at index
    unset($fruits[0]);
    // deletes things 
    array_splice($fruits, 2, 1);
    // add key to value  => ... this is also called associative array
    $fruits2 = ["fruitq" => "apple", "fruit2" =>  "banana",
     "fruit3" => "pear", "fruit4" => "cherry"];
     echo $fruits2["fruit2"];
     // echos full array
     print_r($fruits2);
     // counts data in array
     echo count($fruits2);
     //sorts array in order a b c or 0 1 2 3
     sort($fruits2);
     // adds value at end on new index only works on indexed arrays
     array_push($fruits, "mango");
     // add new values to associative arrays .. place key within brackets
     $fruits2["fruit5"] = "mango";
     // adds value on spesific index
     array_splice($fruits2, 2, 0, "strawbarry");
     // multi dimentional array
     $roots = [
        ["apple", "melon"],
        "cherry",
        "mango"
     ];
     echo $roots[0][1];
     // associative array multi dimentional
     $food = [
        "fruit" => ["mango", "apple"],
        "meat" => ["beef", "chicken"]
     ];
     echo $food["fruit"][0];

// array_pop() deletes last index of the array
$a = array("red","green","blue");
array_pop($a);
print_r($a);


// explode makes this tring to an array (kinda)
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));



 // do while loops continue till the while loop is false
 $i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

// while loops continue until statment within while loop is false or
// continue forever if no statement has been made
while ($a <= 10) {
    $a += 1;
    $a ++;
}
// for loops
for ($i=0; $i <  5; $i++) { 
    # code...
}

// foreach
foreach ($variable as $key => $value) {
    # code...
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

// if statemts

if ($condition) {
    # code...
}
elseif($condition){
    # code...
}
else {
    # code...
}

// casting

// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL
    


// operators

// +	Addition	$x + $y	Sum of $x and $y	
// -	Subtraction	$x - $y	Difference of $x and $y	
// *	Multiplication	$x * $y	Product of $x and $y	
// /	Division	$x / $y	Quotient of $x and $y	
// %	Modulus	$x % $y	Remainder of $x divided by $y	
// **	Exponentiation	$x ** $y	Result of raising $x to the $y


?>