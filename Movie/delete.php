<?php

 include_once('config.php');

 $id = $_GET['id'];
 $sql = "DELETE FROM movies where id=:id";
 $prep -> bindParam(':id', $id);
 $prep-> execute();

 header("Location:list_movies.php");
 

?>
    