<?php

    class domain 
    {
        protected static function getwebsitname()
        {
            return "www.google.com";
        }
    }

    class domainww extends domain
    {
        public $webname;
        public function __construct()
        {
            $this -> webname = parent::getwebsitname();
        }
    }

    $domainww = new domainww;
    echo $domainww -> webname;   

?>