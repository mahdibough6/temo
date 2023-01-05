<?php
session_start();
include_once './db/db.con.php';
include_once './includes/functions.inc.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $fileActualName = array_slice($fileExt, 0, -1);

    $allowed = array(
        'txt'
    );
    if(isset($_SESSION["username"]))
    $username = $_SESSION["username"];
    if (!is_dir("uploads/".$username)) {
        mkdir("uploads/".$username);
      }
    $uploads = "uploads/".$username or die("username does not exists");

    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNewName = uniqid().".".$fileActualExt;
                $fileDestination = $uploads."/".$fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                $data = file_get_contents($fileDestination);

                createFile($con, implode('',$fileActualName), $data, $username,$fileDestination);
            }
            else {
                echo "your file is too big !";
            }

        }
        else {
            echo "there was an error uploading your file !";
        }
    }
    else {
        echo "not allowed file type !";
    }
}