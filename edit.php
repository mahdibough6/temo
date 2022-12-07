
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/edit.style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>temo</title>
</head>
<body>


<div class="container">
<div class="header">
 <div class="btn bold" onmousedown="changeText('bold')"><i class="fa-solid fa-bold"></i></div>
        <div class="btn italic"onmousedown="changeText('italic')"><i class="fa-solid fa-italic"></i></div>
        <div class="btn regular"onmousedown="changeText('regular')"><i class="fa-solid fa-r"></i></div>
        <div class="btn strike"onmousedown="changeText('strike')"><i class="fa-solid fa-strikethrough"></i></div>
        <div class="btn header"onmousedown="changeText('header')"><i class="fa-solid fa-heading"></i></div>
        <div class="btn size"onmousedown="changeText('size')"><i class="fa-solid fa-s"></i></div>
        <div class="btn underline"onmousedown="changeText('underline')"><i class="fa-solid fa-underline"></i></div>
        <div class="btn align-right"onmousedown="changeText('right')"><i class="fa-solid fa-align-right"></i></div>
        <div class="btn align-left"onmousedown="changeText('left')"><i class="fa-solid fa-align-left"></i></div>
        <div class="btn justify"onmousedown="changeText('justify')"><i class="fa-solid fa-align-justify"></i></div>
        <div class="btn center"onmousedown="changeText('center')"><i class="fa-solid fa-align-center"></i></div>
</div>
<div class="sheet" contenteditable="true">
    
<?php
if(isset($_SESSION["data"])){
    echo $_SESSION["data"];
}
?>
</div>
<div class="btn save"><i class="fa-solid fa-floppy-disk"></i></div>
<div class="home" ><img src="./img/home-v1.svg" alt="" srcset=""></div>
<input type="text" class="title" name="title" 
value="
<?php
if($_SESSION["title"]!=null){
    echo $_SESSION["title"];
}
else{
    echo "untitled";
}
?>
"
>
</div>
   <script src="./js/editor/edit.func.js"></script> 
   <script src="./js/editor/formating.js"></script> 
   
</body>
</html>