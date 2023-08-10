<?php

    $myfile = fopen("testfile.txt","w") or die("Unable to open file");

    $txt = "joel joby\n";
    fwrite($myfile,$txt);
    fwrite($myfile,"i Am joel joby");
    

    
    $x = "donald duck\n";
    $y = "mickey mouse\n";
    fwrite($myfile,$x);
    fwrite($myfile, $y) ;
    fclose($myfile);
    


?>