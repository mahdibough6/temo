<?php 
    session_start();
if(isset($_POST["logout"]) || isset($_POST["plogout"])){
session_unset();
session_destroy();
header("location: ../index.php");
exit();
}

else{
    if(isset($_SESSION["username"])){
        session_unset();
        session_destroy();
        header("location: ../index.php");
        exit();
    }
    else{

        session_unset();
        session_destroy();
        header("location: ../index.php");
        exit();
    }
}