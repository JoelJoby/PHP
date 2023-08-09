<?php

   $name = $email = $gender = $comment = $website = "";
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

    if(empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    }
    else 
    {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"]))
    {
        $emailErr = "Email is required";
    }
    else 
    {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"]))
    {
        $website = "";
    }
    else
    {
        $websiteErr = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"]))
    {
        $commentErr = "";
    }
    else
    {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($POST["gender"]))
    {
        $genderErr = "Gender is required";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }

   }

   function test_input($data)
   {
    $data = trim($data);
    $data = stripslashes($data);
    $adta = htmlspecialchars($data);
    return $data;
   }

   echo "Welcome ";
   echo $name;
   echo "<br>";
   echo "$email <br>";
   echo "$website <br>";
   echo "$comment <br>";
   echo "$gender";

?>