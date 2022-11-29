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
       header("location: ../home.php");
     }
     else {
       header("location: ../index.php");
     }
    mysqli_close($con);
    exit();

}