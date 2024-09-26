<?php

   

  function maximum($x,$y){
    if($x>$y){
        return $x;
        echo "$x";
    }
    else{
        return $y;
        echo "$y";
    }
  }


  $a=20;

  $b=30;

  $test=maximum($a,$b);

  echo"The max value of $a and $b is $test \n";
  // \n eshte si <br> braek line 

  




?>