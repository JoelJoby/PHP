<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <?php

                include("php/config.php");
                if(isset($_POST['submit']))
                {
                    $email = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password = '$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row))
                    {
                        $_SESSION['valid'] = $row['email'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['age'] = $row['age'];
                        $_SESSION['id'] = $row['id'];
                    }
                    
                    else
                    {
                        echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location='login.php'; </script>";
                    }

                    if(isset($_SESSION['valid']))
                    {
                        header("Location: home.php");
                    }   
                    
                }
                else
                {

            ?>

            <header>Login</header>

            <form action="" method="post">

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>   

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login"
                    required>
                </div>

                <div class="links">
                    Don't Have account? <a href="register.php">Sign Up 

                    </a>
                </div>

            </form>

        </div>
        <?php } ?>
    </div>
    
</body>
</html>