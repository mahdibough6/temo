<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    require_once '../../db/db.con.php';
    require_once '../../includes/functions.inc.php';

    if (emptyInput($username, $password)) {
        header("location: ../../signup.php?error=emptyInput");
        exit();
    }
    if (invalidPhone($phone)) {
        header("location: ../../signup.php?error=invalidPhone");
        exit();
    }
    if (invalidEmail($email)) {
        header("location: ../../signup.php?error=invalidEmail");
        exit();
    }
    if (invalidPassword($password)) {
        header("location: ../../signup.php?error=invalidPassword");
        exit();
    }
    if(userExists($con, $username)){
        header("location: ../../signup.php?error=userexists");
        exit();
    }
    createUser($con, $username, $password, $email, $phone) ;
    
  exit();
}
else {
    header("location: ../../signup.php");
    exit();
}