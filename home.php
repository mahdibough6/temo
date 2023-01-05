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
            <div class="plogout-icon">

                <img src="./img/logout-v1.svg" alt="">
            </div>
            <span>logout</span>
        </div>
    </div>
<div class="popup_upload phide">
<form action="./upload.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="file" id="">
    <button  type="submit"  name="submit">upload file</button>
   </form>
   <button class="upload_close"
   onclick="
   let d = document.querySelector('.popup_upload'); 
   d.classList.toggle('phide');
   "
   >close</button>
</div>
    <h1 id="big-title">hello <?php echo $_SESSION["username"] ?></h1>
    <div class="toolbox">
        <div class="create-file">
        <div type="submit" name="ok" class="create">
            <img src="./img/add.svg" alt="add file">
            <span
           onclick="window.location.href = 'http://localhost/temo/home.php'" 
            >create file</span>
        </div>
        <input type="text" id="titleId" placeholder="Please write the title here ...">
    </div>
    <div class="upload-file">
        <div class="icon"><img src="./img/upload-v1.svg" alt="" srcset=""></div>
        <span
         onclick="
   let d = document.querySelector('.popup_upload'); 
   d.classList.toggle('phide');
   "
        >upload a file </span>
    </div></div>
    <div class="filelist">
        <?php


        require_once './db/db.con.php';
        require_once './includes/functions.inc.php';



        $files = showFiles($con, $_SESSION["username"]);
        for ($i = 0; $i < sizeof($files); $i++) {
            $file = explode("|", $files[$i]);
            if(!empty($file[3])){
                $file_id = $file[3];
            }
            else{
                $file_id = $file[0];
            }
            echo '
            
        <div class="file">
            <div class="icon">
            <img src="./img/file-v2.svg" alt="" srcset="">
            </div>
            <div class="titre">' . $file[1] . '</div>
            <div class="date">' . $file[2] . '</div>
            <div class="options"> 
<div class="remove">
            <img src="./img/remove-v1.svg" alt="" srcset="">
        <input type="hidden" value="' . $file_id . '">
             </div>
            <div class="edit">
        <input type="hidden" value="' . $file_id . '">
            <img src="./img/edit-v2.png" alt="" srcset="">
</div>
            <div class="download">
        <input type="hidden" value="' . $file_id . '">
            <img src="./img/download-v2.png" alt="" srcset="">
</div>
</div>
        </div>
            ';
        }

        ?>
    </div>
    <script src="./js/home/home.js"></script>
</body>

</html>