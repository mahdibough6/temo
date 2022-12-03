<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["title"])&&isset($_POST["text"])){
        include_once '../../includes/functions.inc.php';
        include_once '../../includes/dbh.inc.php';

        createFile($con, $_POST["title"], $_POST["text"], $_SESSION["username"]);
        header("location: ../../home.php");
        exit();
    }
    

}