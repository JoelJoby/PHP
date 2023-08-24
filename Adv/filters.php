<?php

    $str = "<h1> Hello world</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);

    echo $newstr;

    $int = 100;
    
    if (!filter_var($int, FILTER_VALIDATE_INT
    ) === FALSE)
    {
        echo "Integer is valid";

    }

    else 
    {
        echo "integer is not Valid ";
    }

    $email = "jone.doe@example.com";

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE)
    {
        echo ("$email is a valid one");
    }

    else 
    {
        echo "$email is invalid email address.";
    }


?>