<?php
    echo (pi());
    echo "<br><hr/>";

    echo (min(0,150,30,-20));
    echo "<br><hr/>";

    echo (max(200,20,64,2234,));
    echo "<br><hr/>";

    echo (abs(-65.7)); //returns 65.7
    echo "<br><hr/>";

    echo (sqrt(64));
    echo "<br><hr/>";

    echo (round(0.67)) . "<br>";
    echo (round(0.29));
    echo "<br> <hr>";

    echo (rand()) . "<br>";
    echo (rand(10,100));    
    echo "<br><hr/>";

    define ("cars",["joeloby","BMW"]);
    echo cars[1];

    define("joel","i am joel");

    function miintro()
    {
        echo joel;
    }

    miintro();
    
?>
