<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST["ok"])){
        include_once '../../db/db.con.php';
        include_once '../../includes/functions.inc.php';
        $title = $_POST["titleId"];
        if(empty($title))$title = "untitled";
        $data ="";
        createFile($con, $title, $data, $_SESSION["username"]);
        exit();  
    }
}
