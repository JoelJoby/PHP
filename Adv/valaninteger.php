<?php

    $int = 100;
    if (!filter_var($int, FILTER_VALIDATE_INT )==false)
    {
        echo ("Integer is valid");

    }
    else
    {
        echo("Integer is not valid");
    }

    $ip = "127.0.0.1";
    if (!filter_var($ip,FILTER_VALIDATE_IP) === false)
    {
        echo ($ip . "is a valid IP address");
    }
    else
    {
        echo ($ip . "is not a valid ip address");
    }
?>