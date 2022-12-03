<?php
session_start();
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="navbar">
        <div class="avatar"></div>
       <!--  <form action="./includes/logout.inc.php" method="post">
       <button type="submit" class="logout" name="logout" >logout</buttion></form>
        <div class="settings"></div>-->
    </div>
    <div class="popup phide">

        <div class="settings">
            <div class="set-icon">
            <img src="./img/settings-v1.svg" alt="">
</div>
            <span>Settings</span>
        </div>
        <hr>
        <div class="plogout">
            <div  class="plogout-icon">

            <img  src="./img/logout-v1.svg" alt="">
            </div>
            <span>logout</span>
        </div>
    </div>
<h1 id="big-title">hello <?php echo$_SESSION["username"] ?></h1>
    <div class="toolbox">
        <form action="./editing_page/includes/create.inc.php" method="post">
        <button type="submit" name="ok" class="create">
<img  src="./img/add.svg" alt="add file" >
<span>create file</span>
        </button>
        <input type="text" name="title" placeholder="Please write the title here ..." id="">
</form>
    </div>
    <div class="filelist">
        <?php


    require_once './includes/dbh.inc.php';
    require_once './includes/functions.inc.php';



        $files = showFiles($con, $_SESSION["username"]);
        for ($i=0; $i < sizeof($files); $i++) { 
            $file = explode("/",$files[$i]);
            echo'
            
        <div class="file">
        <input type="hidden" value="'.$file[0].'">
            <div class="icon">
            <img src="./img/file-v2.svg" alt="" srcset="">
            </div>
            <div class="titre">'.$file[1].'</div>
            <div class="date">'.$file[2].'</div>
            <div class="options"> 
<div class="remove">
            <img src="./img/remove-v1.svg" alt="" srcset="">
        <input type="hidden" value="'.$file[0].'">
             </div>
            <div class="edit">
            <img src="./img/edit-v2.png" alt="" srcset="">
</div>
</div>
        </div>
            ';

        }

?>
    </div>
   <script src="./js/home.js"></script> 
   <script src="./editing_page/js/create_file.js"></script> 
</body>
</html>