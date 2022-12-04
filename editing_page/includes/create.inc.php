<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST["ok"])){
        include_once '../../includes/dbh.inc.php';
        include_once '../../includes/functions.inc.php';
        $title = $_POST["titleId"];
        $data ="";
        createFile($con, $title, $data, $_SESSION["username"]);
        exit();  
    }
    else echo "hii";
}
else echo "hiii";