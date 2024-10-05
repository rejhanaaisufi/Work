<?php

   $file= fopen('example.txt', 'r')
   
   while(!feof($file)){    
   echo fgets ($file). "br";  // fgets i merr dhe i lexon te gjitha shkrimet te txt file 
   }

   fclose ($file);
   
?>