<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    NAME: <input type = "text" name = "fname">
    EMAIL:<input type ="email" name = "ename">
    <input type = "submit">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['fname'];
        
        if (empty($name))
        {
            echo "name is empty";
        }

        else 
        {
            echo $name;
        }

        $email = $_POST['ename'];

        if(empty($email))
        {
            echo "Email is Empty";
        }

        else
        {
            echo $email;
        }

        
    }
    ?>

</body>
</html>