$(function(){
    $(".btn.save").click(function(){
    let text = $(".sheet").html();
            $.ajax({
                url: "http://localhost/temo/includes/editor/save_file.inc.php",
                type:'POST',
                data:{
                    title:$(".title").val(),
                    text:text
                   
                }
            
            })
    })
    $(".home").click(function(){
           window.location.href = "http://localhost/temo/home.php";
        })
    
    });