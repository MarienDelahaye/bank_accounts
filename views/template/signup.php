<?php
  include("header.php");
  include("../../controllers/db_connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
<center>
<form action="action.php" method="post">
<input type="text" name="name" placeholder="First name and Last name"><br>
 <input type="text" name="email" placeholder="Email"><br>
 <input type="text" name="mobile" placeholder="Phone number"><br>
 <input type="submit" value="OK">
</form>
</center>
</body>
</html>