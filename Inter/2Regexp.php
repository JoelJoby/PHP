<?php

    $str = "visit w3schools";
    $pattern = "/w3schools/i";

    echo preg_match($pattern, $str) . "<br>";

    $x = "The rain in SPAIN falls mainly on the plains";
    $word = "/ain/i";

    echo preg_match_all($word,$x) . "<br>";

    $str2 = "visit micro";
    $pattern = "/micro/";

    echo preg_replace($pattern,"w3schools",$str);
?>