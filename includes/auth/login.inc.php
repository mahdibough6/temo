<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../../db/db.con.php';
    require_once '../../includes/functions.inc.php';

   
    if (loginUser($con, $username, $password)) {
        header("location: ../../home.php");
        exit();
    } else {
        header("location: ../../login.php?error=invalidInput2");
        exit();
    }
} else {
    header("location: ../../login.php");
    exit();
}
