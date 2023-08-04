<?php
    class fruit 
    {
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function out()
        {
            echo "The fruit name is {$this->name} and the color is {$this->color}.";
        }
    }

    class apple extends fruit
    {
        public function message()
        {
            echo "I am a fruit.";
        }
    }

    $apple = new apple("apple","red");

    $apple->out();
    $apple->message();

    class fruit 
    {
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function out()
        {
            echo "The fruit is {$this->name} and The color is {$this->color}";
        }
    }

    class apple extends fruit 
    {
        // public $taste;

        // public function __construct($taste)
        // {
        //     $this->taste = $taste;
        // }

        public function appleout()
        {
            echo "The fruit that we eat is " . "<br>";
            $this->out();
        }

    }

    $apple = new apple("apple","red");
    
    $apple->appleout();

    class fruit
    {
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color =$color;
        }

        public function out()
        {
            echo "The fruit we eat is {$this->name} and the color is {$this->color}." . "<br>";
        }

        
    }
    
    class apple extends fruit
    {
        public $taste;

        public function __construct($name,$color,$taste)
        {
            $this->name = $name;
            $this->color = $color;
            $this->taste = $taste;
        }

        public function out()
        {
            echo "the fruit is {$this->name} and its color is {$this->color} and it tates {$this->taste}";
        }
    }

    $obj = new  apple ("apple","red","sweet");

    $obj->out();

?>