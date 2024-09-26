<?php

  $sport1="Football";
  $sport2="Basketball";
  $sport3="Handball";
  $sport4="Voleyball";

  $sports = array('Football','Basketball','Hendball','Voleyball');    // menyra 1 se si i shkrujna me arrays
  $sportss = ['Football','Basketball','Hendball','Voleyball'];        //menyra 2

  echo $sportss[1];

  echo end($sports);

  echo count($sportss);     //numeron vlerat 

  // nje varg fillon prej 0 , lart ka 4 vlera por fillon nga vlera"0"
    
  $len = count($sports);// sa vlera i kena brenda $sport 

  for($i=0; $i < $len; $i++){
    echo $sports[$i], "\n"; 
  }

  


?>