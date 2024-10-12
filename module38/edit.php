<?php

   include_one("config.php");

   $id=$_GET['id'];

   $sql = "SELECT * FROM user WHERE id =:id";

   $prep = $conn -> prepare($sql);
   $prep->bindParam(":id",$id);
   $prep->execute();
   $data = $prep->fetch();



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      form>input{
         margin-bottom:10px;
         font-size:20px;
         padding:5px;
      }
      button{
         background:none;
         border:none;
         border:1px solid black;
         padding:10px 40px;
         font-size:20px;
         cursor:pointer;
      }
   </style>
</head>
<body>
   <form action="update.php" method="POST">

   <input type="hiddene" name="id" value="<?php echo $data['id']?>"> <br>
   <input type="text" name="name" value="<?php echo $data['name']?>"> <br>
   <input type="text" name="surname" value="<?php echo $data['surname']?>"> <br>
   <input type="text" name="email" value="<?php echo $data['email']?>"> <br>
   <br><br>

   <button type="submit" name="update">Update</button>

   </form>

   <a href="dashboard.php">Dashboard</a>

</body>
</html>