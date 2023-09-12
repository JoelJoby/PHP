<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid']))
    {
        header("Location: Login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">

        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">


            <?php

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

                while($result = mysqli_fetch_assoc($query))
                {
                    $res_username = $result['username'];
                    $res_email = $result['email'];
                    $res_age = $result['age'];
                    $res_id = $result['id'];

                }

                echo "<a href='edits.php? id=$res_id'> Change Profile </a>"



            ?>

            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <main>
       <div class="main-box top">
        <div class="top">

            <div class="box">
                <p>Hello <b><?php echo $res_username ?></b>, Welcome</p>
            </div>

            <div class="box">
                <p>Your Email is <b><?php echo $res_email?></b></p>
            </div>

        </div>

        <div class="bottom">
            <div class="box">
                <P>
                    And u r age is<b><?php echo $res_age ?></b>.
                </P>
            </div>

        </div>

       </div> 
    </main>
    
</body>
</html>