<?php
include_once '../../includes/functions.inc.php';
include_once '../../db/db.con.php';
if(isset( $_GET["id"])){
$file_id = $_GET["id"];
downloadFile($con, $file_id);
exit();
}

