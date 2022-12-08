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
  <input type="email" name="password" >
  <label for="phone">phone</label>
  <input type="phone" name="password" >
  <label for="password">Password</label>
  <input type="password" name="password" >
  <?php
  if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
          echo'<p id="err">empty input please try again !</p>';
      }
  }
  ?>

  <button type="submit" name="submit">Sign up</button>
</form>
    

</body>
</html>
