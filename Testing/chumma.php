<?php

    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]); 
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;  
    }

    echo "<h2>Your Input</h2>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    Echo $comment . "<br>";
    echo $gender . "<br>";
    
?>