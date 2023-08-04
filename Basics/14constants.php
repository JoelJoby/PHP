<?php
    // class goodbye
    // {
    //     const LEAVE = "thank you for visiting ";
    // }

    // echo goodbye::LEAVE;

    class goodbye
    {
        const LEAVE = "thanku you ";

        public function byebye()
        {
            echo self::LEAVE;
        }
    }

    $object = new goodbye();
    $object->byebye();

?>