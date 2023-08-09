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
            width : 300px;
        }

        .container
        {
            display : flex;
            justify-content: space-around;
            width : 100%;
            background-color : green;
            flex-wrap : wrap;
        }

    </style>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$countries = array("Germany", "UK", "india");
$images = array("./images/car1.jpg","./images/car2.jpg","./images/car3.jpg");

echo "<div class = 'container'> \n";


for ($i = 0; $i < 3; $i++)
{
    
    echo "<div class = 'box'> \n";
    echo "<img src = '{$images[$i]}'> \n";
    echo "<h2 >{$cars[$i]}</h2> \n";
    echo "<p>$countries[$i]</p> \n";
    echo "</div>";
    
}
echo "</div>";
?>
</body>

</html>