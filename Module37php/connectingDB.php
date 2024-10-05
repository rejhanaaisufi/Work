<?php
//creatin database
  $host ='localhost';
  $user='root';
  $pass='';

  try{ 
  $conn = new PDO ("mysql:host=$host;", $user, $pass);
  
  echo "Connected";
  }catch(Exempetion $e){
   echo "Not connectet";
  }

  
  
?>