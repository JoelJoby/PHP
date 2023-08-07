<?php

    $cars = array("BMW","BENZ","VOLVO");
    $arrlen = count($cars);

    for($i = 0; $i < $arrlen; $i++)
    {
        echo "The car name is : {$cars[$i]}";
        echo "<br>";
    }

    $age = array("peter"=>"35","ben"=>"25","joel"=>23);

    echo "peter is " . $age['peter'] . " years old.";

    foreach($age as $x => $x_value)
    {
        echo "key= " .$x . " value= " . $x_value;
        echo "<br>";
    }

    
?>