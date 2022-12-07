<?php
session_start();
if(isset($_SESSION["username"])){ 
  header("location: ./home.php");
  exit();
  }
 else {
echo'
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

<form action="./includes/auth/login.inc.php" method="post">
  <h2>Sign In</h2>
  <label for="username">Username</label>
  <input type="text" name="username" >
  <label for="password">Password</label>
  <input type="password" name="password" >
  <button type="submit" name="submit">Sign in</button>
</form>
';}
 ?>   


</body>
</html>