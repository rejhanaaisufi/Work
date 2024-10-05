<?php

$host = "localhost";
$db = 'testdb2';                           // ktu e shrujna database qe e kemi kriju, na e kena kriju database te creatingDB.php file edhe e kemi perdor qata 
$user = "root";
$pass = '';


try{
   $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
   $sql = "CREATE  TABLE user (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR (30) NOT NULL,
   password VARCHAR (50) NOT NULL)";

   $pdo->exec ($sql);
   echo "Table successfully created";

}catch(Exception $e){
   echo "Table not created". $e->getMessage();
}

?>