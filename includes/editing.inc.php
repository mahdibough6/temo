<?php
session_start();
$_SESSION["title"] = $_POST["title"] ;
header("location: ../editing_page/");
exit();
