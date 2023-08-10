<?php
     // echo readfile('webdi.txt');

     // $myfile = fopen("webdi.txt","r") or die("unable to ope the file!");
     // echo fread($myfile, filesize("webdi.txt"));
     // fclose($myfile);

     $myfile = fopen("webdi.txt","r") or die("unable to ope the file!");
     echo fgets($myfile);
     fclose($myfile);


     

?>