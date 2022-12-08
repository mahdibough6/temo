<?php

function emptyInput($username, $password)
{
    if (empty($username) && empty($password)) {
        return true;
    } else {
        return false;
    }
}
function userExists($con, $username)
{
    $result = false;
    $sql = "SELECT * FROM users WHERE username='".$username."';";
    $rs = mysqli_query($con, $sql);
    if (mysqli_num_rows($rs) != 0) {
        $result = true;
    }
    return $result;
    exit();
}
function invalidUsername($username)
{
    $result = false;
    if (!preg_match("/^\w{0,}$/", $username)) {
        $result = true;
    }
    return $result;
}
function invalidPassword($password)
{
    $result = false;
    if (!preg_match("/^.{0,}$/", $password)) {
        $result = true;
    }
    return $result;
}
function invalidInput($con, $username, $password)
{
    $result = false;
    if (
        invalidPassword($password)||
        invalidUsername($con, $username)
    ) {
        $result = true;
    }
    return $result;
}
function createUser($con, $username, $password)
{
    $sql = "INSERT INTO users(username, password) VALUES ('".$username."', '".$password."');";
    mysqli_query($con, $sql);
    mysqli_close($con);
    session_start();
    $_SESSION["username"] = $username;
header("location: ../../home.php");
    exit();
}
function loginUser($con, $username, $password)
{
    $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."';";

    $rs = mysqli_query($con, $sql);
    $num_row = mysqli_num_rows($rs);
    if ($num_row === 1) {
        session_start();
        $_SESSION["username"] = $username;
        return true;
    } else {
        return false;
    }
    mysqli_close($con);
    exit();
}

function createFile($con, $title, $data, $username)
{
    $sql1 = "SELECT id_user FROM users WHERE username='".$username."';";
    $rs1 = mysqli_query($con, $sql1);
    $row = mysqli_fetch_row($rs1);
    $sDate = date("Y-m-d H-i-s");
    $owner_id=$row[0];
    $_SESSION["date"] = $sDate;
    $sql = "INSERT INTO files(file_name, file_data, last_change_date, creation_date, owner_id) VALUES ('".$title."','".$data."','". $sDate."','". $sDate."','".$owner_id."');";

    mysqli_query($con, $sql);
    mysqli_close($con);

    exit();
}
function showFiles($con, $username)
{
    $sql1 = "SELECT id_user FROM users WHERE username='".$username."';";
    $rs1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($rs1);
    $owner_id=$row1[0];
    $sql = "SELECT file_id, file_name, date_format(last_change_date, '%W %e %Y %H:%i:%s') as date
     FROM files WHERE owner_id='".$owner_id."';";
    $files=array();

    $rs = mysqli_query($con, $sql);
    $i = 0;
    while ($row = mysqli_fetch_row($rs)) {
        $files[$i] =$row[0]."/".$row[1]."/".$row[2];
        $i++;
    }

    mysqli_query($con, $sql);
    mysqli_close($con);

    return $files;
}
function remove($con, $file_id)
{
    $sql = "DELETE FROM files WHERE file_id='".$file_id."';";
    mysqli_query($con, $sql);
    mysqli_close($con);
    exit();
}


function fileInfo($con, $file_id)
{
    $sql1 = "SELECT file_id, file_name, file_data FROM files WHERE file_id='".$file_id."';";
    $rs1 = mysqli_query($con, $sql1);
    $file = mysqli_fetch_row($rs1);
    session_start();
    $_SESSION["edit_id"] = $file[0];
    $_SESSION["title"] = $file[1];
    $_SESSION["data"] = $file[2];
    mysqli_query($con, $sql1);
    mysqli_close($con);
    exit();
}
function updateFile($con, $file_id, $title, $data)
{
    $sql = "UPDATE files SET file_name = '".$title."' , file_data = '".$data."'WHERE file_id='".$file_id."';";
    mysqli_query($con, $sql);
    mysqli_close($con);
    exit();
}
