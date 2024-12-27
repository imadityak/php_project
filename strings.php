<?php
    $str = "This is a String";
    echo $str;
    $str_length = strlen($str);
    //string concatination
    echo "<br>The length of the string is " . $str_length . ". Thank you";
    echo "<br>The number of words in the string is " . str_word_count($str) . ". Thank you";
    echo "<br>The reverse string is " . strrev($str) . ". Thank you";
    echo "<br>The search for 'is' in the string is " . strpos($str, "is") . ". Thank you";
    echo "<br>The replace word in the string is " . str_replace("is", "at", $str) . ". Thank you";
?>