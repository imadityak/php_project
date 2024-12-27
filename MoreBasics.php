<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width:80%;
        background-color: rgb(209, 198, 198);
        margin: auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about php</h1>
        This is a container boi.
        <br>
        <?php

        //conditional statments
        $age = 2;
        if($age>18){
            echo "You can go to party";
        }else if($age==7){
            echo "You are 7";
        }
        else{
            echo "No party for you";
        }

        //arrays
        echo "<br>";
        $languages = array("Python", "C++", "php");
        // echo $languages[0];
        // echo "<br>";
        // echo count($languages); // no. elements in array

        //loops in php
        $a = 0;
        while($a <= 10){
            echo "<br>The value of a from while loop is: ";
            echo $a;
            $a++;
        }

        //iterating array in php using loops
        $a = 0;
        while($a < count($languages)){
            echo "<br>The value of language is: ";
            echo $languages[$a];
            $a++;
        }

        //do-while
        $a =20;
        do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;  
        } while ($a < 10);

        //for
        for ($a=0  ; $a < 10; $a++) { 
            echo "<br>The value of a from for loop is: ";
            echo $a;
        }

        //for-each useful in iterating in arrays
        foreach ($languages as $value) {
            # code...
            echo "<br>The value from for-each is ";
            echo $value;
        }
        ?>

        <?php
        //studing functions
        //here we are only defining the function(user-defined function)
        function print_number($number){
            echo "<br>Your number is ";
            echo $number;
        }
        //here we are calling so here the number is printed
        print_number(45);
        ?>
    </div>
</body>
</html>