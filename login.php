<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Login</title>
    
</head>
<body>

<form action="./includes/login.inc.php" method="post">
  <h2>Sign In</h2>
  <label for="username">Username</label>
  <input type="text" name="username" >
  <label for="password">Password</label>
  <input type="password" name="password" >
  <button type="submit" name="submit">Sign in</button>
</form>

 <?php 
 echo var_dump($_SESSION);
 if(isset($_POST["error"])){
  echo" <p>hahahah</p>";
 }
 ?>   


</body>
</html>