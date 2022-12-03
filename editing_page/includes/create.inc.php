<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["ok"])){
        $_SESSION["title"] = $_POST["title"];
        header("location: ../");
        exit();
    }
    

}