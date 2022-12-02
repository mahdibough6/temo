<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
    
</div>
<div class="btn save"><i class="fa-solid fa-floppy-disk"></i></div>
<input type="text" class="title" name="title" 
value="
<?php
if(isset($_SESSION["title"])){
    echo $_SESSION["title"];
}
else{
    echo "untitled";
}
?>
"
>
</div>
   <script src="./js/app.js"></script> 
</body>
</html>