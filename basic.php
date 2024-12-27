<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class ="Container">
<!-- This is how you comment in html and php-->
    <?php 
    //you can insert php tags inside the html code to run php code.
    //echo for printing on browser
    $variable1 = 10;
    //php is dynamically typed language;
    $variable2 = 5;

    //Operators in php    
    // Arithmetic operator
    echo "The value of var1 + var2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of var1 - var2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of var1 * var2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of var1 / var2 is ";
    echo $variable1 / $variable2;

    //assignment operator
    $newvar = $variable1;
    $newvar += 1;
    $newvar -= 1;
    $newvar *= 2;
    $newvar /= 10;
    echo "<br>";
    echo "The value of new var is ";
    echo $newvar;  
    echo "<br>";

    //comparison operators
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    //Increment/decrement operator
    echo $variable1++;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";
    echo $variable1;

    //logical operator
    /*
     and (&&) -- both need to be true to get a true otherwise false
     or(||)   -- both need to be false to get a false otherwise true
     xor      -- only either of the condition is true to get a true otherwise false
     !        
     */
    echo "<br>";
    // $myVar = (false) and (true);
    $myVar = (true or true);
    echo var_dump($myVar);
    ?>

    <?php
    //defining constants
    define("Pie", 3.14);
    //datatypes: 
    /*
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Array
    6. Object
    7. Resource
    8. null
    */
    echo "<br>Data Types<br>";
    $var = "This is a String";
    echo var_dump($var);
    echo "<br>";

    $var = 67;
    echo var_dump($var);
    echo "<br>";

    $var = 67.1;
    echo var_dump($var);
    echo "<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo Pie;
    ?>
    </div>
</body>
</html>