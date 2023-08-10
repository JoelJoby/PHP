<?php

    echo "Today is " . date("y/m/d") . "<br>";
    echo "Today is " . date("y.m.d") . "<br>";
    echo "today is " . date("y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";

    echo "the time is " . date("h:i:sa") . "<br>";

    date_default_timezone_set("America/New_York");
    echo "the time is " . date("h:i:sa") . "<br>";

    $d = strtotime("tomorrow");
    echo date ("y-m-d h:i:sa",$d) . "<br>";

    $startdate = strtotime("saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate)
    {
        echo date("M d" , $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
        
    }



?>