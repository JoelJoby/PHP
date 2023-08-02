<?php
    echo PHP_INT_MAX;
    echo PHP_INT_MIN;
    echo PHP_INT_SIZE . "<br>";

    $y =56898;
    var_dump (is_integer($y));

    $x =568.98;
    var_dump(is_int($x));

    $x = 1.9e411;
    var_dump($x) . "<br>";

    $x = 0xf4c;
    var_dump(is_numeric($x));

    //PHP Casting Strings and Floats to Integers

    $x =42342.424;
    $y = (int)$x;
    echo $y;


?>