<?php
function emptyInputSignup($username, $password){
  return false; 
}
function emptyInputLogin($username, $password){
  return false; 
}
function invalidUsername($username){
    $result = false;
    if(!preg_match("/^\w{0,}$/",$username)){
        $result = true;
    }
    return $result;
}
function invalidPassword($password){
    $result = false;
    if(!preg_match("/^.{0,}$/",$password)){
        $result = true;
    }
    return $result;
}

function createUser($con, $username, $password){
    $sql = "INSERT INTO user(username, password) VALUES ('".$username."', '".$password."');";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header("location: ../index.php");
    exit();

}
function loginUser($con, $username, $password){
    $sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."';";

$rs = mysqli_query($con, $sql);
$num_row = mysqli_num_rows($rs);
     if($num_row === 1){
      session_start();
       $_SESSION["username"] = $username;
       header("location: ./home.inc.php");
     }
     else {
       header("location: ../index.php");
     }
    mysqli_close($con);
    exit();

}

function createFile($con, $title, $data,$username){
    $sql = "SELECT id_user FROM user WHERE username='".$username."';";
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($rs);
    $sDate = date("Y-m-d H-i-s");
  $owner_id=$row[0];
  $_SESSION["date"] = $sDate;
  $sql = "INSERT INTO files(file_name, file_data, last_change_date, creation_date, owner_id) VALUES ('".$title."','".$data."','". $sDate."','". $sDate."','".$owner_id."');";

 mysqli_query($con, $sql);
    mysqli_close($con);
    
    exit();

}
function showFiles($con,$username){
    $sql1 = "SELECT id_user FROM user WHERE username='".$username."';";
    $rs1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_row($rs1);
  $owner_id=$row1[0];
    $sql = "SELECT file_id, file_name, date_format(last_change_date, '%W %e %Y %H:%i:%s') as date
     FROM files WHERE owner_id='".$owner_id."';";
    $files=Array();

    $rs = mysqli_query($con, $sql);
$i = 0;
    while($row = mysqli_fetch_row($rs)){

      $files[$i] =$row[0]."/".$row[1]."/".$row[2];
      $i++;

    }

 mysqli_query($con, $sql);
    mysqli_close($con);

    return $files;
}
function editFile(){

}
function remove($con, $file_id){
$sql = "DELETE FROM files WHERE file_id='".$file_id."';";
    mysqli_query($con, $sql);
    mysqli_close($con);
    
    exit();
}


function fileInfo($con,$file_id){
    $sql1 = "SELECT file_name, file_data FROM files WHERE file_id='".$file_id."';";
    $rs1 = mysqli_query($con, $sql1);
    $file = mysqli_fetch_row($rs1);
   session_start() ;
        $_SESSION["title"] = $file[0];
        $_SESSION["data"] = $file[1];
 mysqli_query($con, $sql1);
    mysqli_close($con);
    exit();
}