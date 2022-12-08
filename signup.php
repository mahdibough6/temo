<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forms.css">
    <title>Sign up</title>
    
</head>
<body>

<form action="./includes/auth/signup.inc.php" method="post">
  <h2>Sign In</h2>
  <label for="username">Username</label>
  <input type="text" name="username" >
  <label for="email">email</label>
  <input type="email" name="email" >
  <label for="phone">phone</label>
  <input type="tel" name="phone" >
  <label for="password">Password</label>
  <input type="password" name="password" >
  <?php
  if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyInput") {
          echo'<p id="err">empty input please try again !</p>';
      }if ($_GET["error"] == "invalidPhone") {
          echo'<p id="err">the phone number is invalid please try again !</p>';
      }if ($_GET["error"] == "emptyEmail") {
          echo'<p id="err">invalid email please try again !</p>';
      }if ($_GET["error"] == "emptyPassword" && $_GET["error"] == "emptyPassword") {
          echo'<p id="err">invalid password please try again !</p>';
      }if ($_GET["error"] == "userexists") {
          echo'<p id="err">username already exists please try again !</p>';
      }
  }
  ?>

  <button type="submit" name="submit">Sign up</button>
</form>
    

</body>
</html>
