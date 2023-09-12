<?php

    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid']))
    {
        header('Location: Login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <?php

                if(isset($_POST['submit']))
                {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];

                    $id = $_SESSION['id'];

                    $edit_query = mysqli_query($con,"UPDATE users SET username = '$username', email = '$email', age = '$age' WHERE id = $id") or die("Error occured!");

                    if($edit_query)
                    {
                        echo "<script type='text/javascript'>alert('Profile Updated!');window.location='home.php'; </script>";
                    }
                }
                else
                {
                     $id = $_SESSION['id'];
                     $query = mysqli_query($con, "SELECT * FROM users WHERE id=$id");

                     while($result = mysqli_fetch_assoc($query))
                     {
                        $res_username = $result['username'];
                        $res_email = $result['email'];
                        $res_age = $result['age'];
                     }
            ?> 

        <header>Change Profile</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value = "<?php echo $res_username; ?>"autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value = "<?php echo $res_email; ?>"autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value = "<?php echo $res_age; ?>" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Update">
            </div>
        </form>
        </div>
        <?php } ?> 
    </div>
    
</body>
</html>