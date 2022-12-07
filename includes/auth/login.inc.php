<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../../db/db.con.php';
    require_once '../../includes/functions.inc.php';

    if(emptyInputLogin($username, $password) !== false){

        header("location: ../login.php?error=emptyinput");
        exit();
    }
    if(loginUser($con, $username, $password) == 1 ) header("location: ../../home.php");
    else header("location: ../../index.php");
}
else {
    header("location: ../../login.php");
    exit();
}