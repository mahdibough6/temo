<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["edit"])){
        include_once './dbh.inc.php';
        include_once './functions.inc.php';
        fileInfo($con, $_POST["id"]);
        exit();

    }
    else{echo "hi";}

}
header("Location: ./home.php");