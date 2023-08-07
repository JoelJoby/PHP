<?php

    $cars = array("volvo","bmw","toyota");
    sort($cars);

    $clength = count($cars);
    for($i =0; $i < $clength; $i++)
    {
        echo "$cars[$i]" . "<br>";

    }

    $num = array(4,5,3,8,2);
    rsort($num);
    $numlen = count($num);
    for($x =0; $x < $numlen; $x++)
    {
        echo "$num[$x]" . "<br>";
    }

    $age = array("peter"=>"35","ben"=>"37","joe"=>"43");
    ksort($age);

    foreach ($age as $x => $y)
    {
        echo "Key= " . $x . " value = " . $y;
        echo "<br>";
    }

?>