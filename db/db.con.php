<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "gestion_temo";

$con = mysqli_connect($server, $user, $pwd, $db);

if(!$con){
    die("Connectino Failed :" . mysqli_connect_error());
}

