<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../../db/db.con.php';
    require_once '../../includes/functions.inc.php';



    if(emptyInputSignup($username, $password) !== false){

        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUsername($username) !== false){

        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if(invalidPassword($password) !== false){

        header("location: ../signup.php?error=invalidPassword");
        exit();
    }
    createUser($con, $username, $password);
    header("location: ../../home.php");
    exit();

}
else {
    header("location: ../../signup.php");
    exit();
}