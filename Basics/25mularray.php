<?php

    $cars = array (array("volvo",22,18),array("BMW",15,13),array("Saab",5,2),array("land rover",17,15));

    for ($row = 0; $row < 4; $row++)
    {
        echo "<P><b> Row Number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++)
        {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }

        echo "</ul>";

    }

?>