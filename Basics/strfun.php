<?php
    $x = "Hello World";
    echo strlen("Hello World") . "<br>"; //strlen() - Return the Length of a String

    echo str_word_count($x) . "<br>"; // str_word_count() - Count Words in a String

    echo strrev($x) ."<br>";  //strrev() - Reverse a String

    echo strpos($x,"d") . "<br>"; //str_replace() - Replace Text Within a String
    
    echo str_replace("world", "Dolly", $x); //str_replace() - Replace Text Within a String

?>