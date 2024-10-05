<?php


try{
   $pdo = new PDO("mysql:host=localhost; dbname=testdb2", "root", "");

   $sql = "DROP TABLE products";

   $pdo-> exec($sql);
   echo "Column was dropped";

}catch(Exception $e){
   echo $e->getMessage();
}

?>