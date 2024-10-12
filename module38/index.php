<?php
 $username = $_GET['username'];
 $password = $_GET['password'];
 echo $username;
 echo "<br>";
 echo $password;
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="text" name="surname" placeholder="Surname"></br>
            <input type="email" name="email" placeholder="Email"></br>
            <button type="submit" name="submit">Add</button>
        </form>

    </body>
</html>


