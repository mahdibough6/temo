<?php 
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(isset($_POST["remove"])){
        include_once './dbh.inc.php';
        include_once './functions.inc.php';
        remove($con, $_POST["id"]);
        echo"hi";
    }

}