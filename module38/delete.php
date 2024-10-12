<?php

  include_once("config.php");
  $id = $_GET['id'];

 //   var_dump($id);die;

  $sql = "DELETE FROM user WHERE id = :id";
  $deleteUsers = $conn->prepare($sql);
  $deleteUSers->bindParam(':id',$id);
  $deleteUsers->execude();

  header('Location:dashboard.php');

  

?>


