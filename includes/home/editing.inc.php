<?php
session_start();
include_once '../../includes/functions.inc.php';
include_once '../../db/db.con.php';
if(isset( $_POST["id"])){
$file_id = $_POST["id"];
fileInfo($con, $file_id);}
exit();