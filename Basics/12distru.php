<?php

    class fruit 
    {
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct()
        {
            echo "This fruit is {$this->name} and the color is {$this->color}";
        }

    }
    $apple = new fruit("apple","red");

?>