<?php


  try{ 
  $pdo = new PDO("mysql:host=localhost; dbname=testdb2", "root", "");     //root username, "" eshte pass qe se kena lon hiq

  $username= "Jack";
  $password = password_hash("mypassword", PASSWORD_DEFAULT);

  $sql = "INSERT INTO user(username, password)VALUES ('$username','$password')";

  $pdo->exec($sql);

  echo "NEw record created";
  }catch (Exception $e){
   echo $e->getMessage();
  }

?>