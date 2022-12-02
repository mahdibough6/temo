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
<h1>hello <?php echo$_SESSION["username"] ?></h1>
    <div class="toolbox">
        <div class="create">
<img  src="./img/add.svg" alt="add file" >
<span>create file</span>
        </div>
    </div>
    <div class="filelist">
        <div class="file">
            <div class="icon">
            <img src="./img/file-v2.svg" alt="" srcset="">
            </div>
            <div class="titre">lorem ipsum</div>
            <div class="date">20/05/2023 12:50 am</div>
            <div class="options"> <img src="./img/edit.svg" alt="" srcset=""> </div>
        </div>
<div class="file">
            <div class="icon">
            <img src="./img/file.svg" alt="" srcset="">
            </div>
            <div class="titre">lorem ipsum</div>
            <div class="date">20/05/2023 12:50 am</div>
            <div class="options"> <img src="./img/edit.svg" alt="" srcset=""> </div>
        </div>
    </div>
    <script src="./js/home.js"></script>
</body>
</html>