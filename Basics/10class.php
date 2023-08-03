<?php
    // class Fruit {
    //     public $name;
    //     public $color;
      
    //     function set_name($name) {
    //       $this->name = $name;
    //     }
    //     function get_name() {
    //       return $this->name;
    //     }
    //   }
      
    //   $apple = new Fruit();
    //   $banana = new Fruit();
    //   $apple->set_name('Apple');
    //   $banana->set_name('Banana');
      
    //   echo $apple->get_name();
    //   echo "<br>";
    //   echo $banana->get_name();

    // class fruit
    // {
    //     public $name;
    //     public $color;
        
    //     function set_name($name)
    //     {
    //         $this->name = $name;
    //     }
    //     function get_name()
    //     {
    //        return $this->name;
    //     }

    //     function set_color($color)
    //     {
    //         $this->color = $color;
    //     }
    //     function get_color()
    //     {
    //         echo "The color of the Fruit " . $this->name . " is " . $this->color;
    //     }
    // }

    //     $apple = new fruit();
    //     $banana = new fruit();

    //     $apple->set_name('apple');
    //     $banana->set_name('banana');

    //     $apple->set_color("red");
    //     $banana->set_color("yellow");

    //     echo $apple->get_name();
    //     echo "<br>";
    //     echo $banana->get_name();
    //     echo"<br>";
    //     echo $apple->get_color();
    //     echo "<br>";
    //     echo $banana->get_color();

        class fruit 
        {
            public $name;
            public $color;

            function set_attr($name,$color)
            {
                $this->name = $name;
                $this->color = $color;
            }

            function get_attr()
            {
                echo "The fruit is " . $this->name . " and its color is " . $this->color;
             }
        }

        $apple = new fruit();
        $banana = new fruit();

        $apple->set_attr('apple','red');
        $banana->set_attr('banana','yellow');

        echo $apple->get_attr();
        echo "<br>";
        echo $banana->get_attr();
?>