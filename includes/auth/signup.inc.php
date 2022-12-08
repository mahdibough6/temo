<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../../db/db.con.php';
    require_once '../../includes/functions.inc.php';

    if (emptyInput($username, $password)) {
        header("location: ../../signup.php?error=emptyinput");
        exit();
    }
    if (invalidPassword($password)) {
        header("location: ../../signup.php?error=invalidInput");
        exit();
    }
    if (invalidUsername($username)) {
        header("location: ../../signup.php?error=invalidInput");
        exit();
    }
    if(userExists($con, $username)){

        header("location: ../../signup.php?error=userexists0");
        exit();
    }
 
    createUser($con, $username, $password) ;
    
  exit();
}
else {
    header("location: ../../signup.php");
    exit();
}