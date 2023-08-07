<?php
    declare(strict_types=1); // strict requirement

        function writemsg()
        {
            echo "Hello World";
        }

        writemsg();


        function addNumbers(int $a, int $b)
        {
            return $a + $b;
        }
    echo addNumbers(5, 5 ) . "<br>";
    // since strict is enabled and "5 days" is not an integer, an error will be thrown

    function setheight($minheight = 50)
    {
        echo "the height is : $minheight";
    }

    setheight(350);
    setheight();

    function sum (int $x,int $y) : float
    {
        $z = $x + $y;
        return $z;

    }

    echo "10+30 is: " . sum(10,30);



?>
