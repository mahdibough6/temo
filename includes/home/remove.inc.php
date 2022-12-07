<?php 
    if(isset($_POST["id"])){
        include_once '../../db/db.con.php';
        include_once '../../includes/functions.inc.php';
        remove($con, $_POST["id"]);
        exit();
    }