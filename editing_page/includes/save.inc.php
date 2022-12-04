<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["title"])&&isset($_POST["text"])){
        include_once '../../includes/functions.inc.php';
        include_once '../../includes/dbh.inc.php';

        if(isset($_SESSION["edit_id"])){

        updateFile($con, $_SESSION["edit_id"], $_POST["title"], $_POST["text"]);
        }

        header("location: ../../home.php");
        exit();
    }
    

}