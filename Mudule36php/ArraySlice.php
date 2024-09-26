<?php

$sports = array('Football','Basketball','Hendball','Voleyball');    // menyra 1 se si i shkrujna me arrays
  
$output= array_slice($sports,2);  //returns 'Football', 'Basketball'

var_dump($output);

?>