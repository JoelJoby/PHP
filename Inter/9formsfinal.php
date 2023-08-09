<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error
        {
            color: red;
        }
    
    </style>

</head>
<body>

        <?php

            $nameErr = $emailErr = $weebsiteErr = $genderErr = "";

            $name = $email = $website = $comment = $gender ="";

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(empty($_POST["name"]))
                {
                    $nameErr = "Name is required";
                }
                else
                {
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z]*$/",$name))
                    {
                        $nameErr = "Only letters and White spaces allowed";
                    }
                }

                if (empty($_POST["email"]))
                {
                    $emailErr = "Email is required";
                }
                else
                {
                    $email = test_input($_POST["email"]);
                    if(!filter_var("email",FILTER_VALIDATE_EMAIL))
                    {
                        $emailErr = "Invalid Email";
                    }
                }

            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }             
            ?>

<h2>
            PHP Contact Form 
        </h2>

        <p span class = "error">* Required field
        </span></p>

        <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Name : <input type = "text" name = "name" value = "<?php echo $name; ?>">
        <span class = "error">* <?php echo $nameErr;?> </span>
        <br><br>

        Email : <input type = "email" name = "email" value = "<?php echo $email; ?>">
        <span class = "error">* <?php echo $emailErr?> </span>
        <br><br>

        <input type = "submit" name = "sub ur res"
        value = "Submit">

        </form>

        <?php

        echo "<h2>Your Input</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        ?>


    
</body>
</html>