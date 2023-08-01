<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .box
        {
            background-color : grey;
            border : 1px dashed red;
            margin-bottom : 50px;
        }
    </style>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$countries = array("Germany", "UK", "india");
$images = array("./images/car1.jpg","./images/car2.jpg","./images/car3.jpg");

for ($i = 0; $i < 3; $i++)
{
    echo "<div class = 'box'>";
    echo "<h2>{$cars[$i]}</h2>";
    echo "<p>$countries[$i]</p>";
    echo "<img src = {$images[$i]}>";
    echo "</div>";
}
?>
</body>

</html>