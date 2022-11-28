<?php
function emptyInputSignup($username, $password){
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
function userExists($con, $username){
    $result = false;
    $sql = "SELECT * FROM user WHERE username = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();

    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    if ($rs = mysqli_stmt_execute($stmt)) {
        $result = false;

    }
    mysqli_stmt_close($stmt);
    return $result ;
}
function createUser($con, $username, $password){
    $sql = "INSERT INTO user(username, password) VALUES (?, ?);";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();

    }
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
        
    header("location: ../index.html");
    exit();

    
}