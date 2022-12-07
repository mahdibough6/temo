<?php
session_start();
if (isset($_SESSION["username"])) {
    header("location: ../../home.php");
    exit();
}
else{
    header("location: ../../index.php");
    exit();
}