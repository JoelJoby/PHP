<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $cars = array("volvo","bmw","benz");
        var_dump($cars);
        for($i=0; $i<3; $i++)
        echo $cars[$i] . "<br>";

        // Objects 

        class car 
        {
            public $color;
            public $model;
            public function __construct($color,$model)
            {
                $this->color =$color;
                $this->model = $model;
            }

            public function message ()
            {
                return "My car is a " .$this->color. " " . "and its model is " .$this->model;
            }
        }

        $mycar = new car('black',"Volvo");
        echo $mycar -> message() . "<br>" ;

        $mycar = new car("red","BMW");
        echo $mycar -> message();

        // NULL values 

        $x = "Hello World";
        $x = NULL;
        echo "<br>";
        var_dump($x);
                      
    ?>

</body>
</html>