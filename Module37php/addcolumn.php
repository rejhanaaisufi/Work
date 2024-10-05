<?php
   
   try{
      $pdo = new PDO("mysql:host=localhost; dbname=testdb2", "root", "");

      $sql = "ALTER TABLE user ADD email VARCHAR(255)";

      $pdo -> exec  ($sql);

      echo "Column was created";
   } catch(Exception $e){
      echo "Error creating column". $e-> getMessage();
   }

?>