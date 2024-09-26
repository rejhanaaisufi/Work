<?php

    $x=5; // Global variable

  function localVariable(){
    $y=10; // Local Variable
    
    echo $y;

  }

  

  localVariable();
   
  echo "\n, $x";

?>