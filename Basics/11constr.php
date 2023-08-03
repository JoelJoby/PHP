<?php
    // class fruit 
    // {
    //     public $name;
    //     public $color;

    //     function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     function get_name()
    //     {
    //         return $this->name;
    //     }
    // }

    // $apple = new fruit('apple');
    // echo $apple->get_name();

    class fruit 
    {
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;
        }

        function get_attr()
        {
            echo "the name of the fruit is " . $this->name . " and its color is " . 
            $this->color;
        }

        $apple = new fruit("apple","red");

        echo get_attr();

    }
?>

