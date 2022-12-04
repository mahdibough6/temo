$(function(){
$(".btn.save").click(function(){
console.log("works");
let text = $(".sheet").html();
  console.log(text);
        $.ajax({
            url: "http://localhost/temo/editing_page/includes/save.inc.php",
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
$(".create").click(function(){

        $.ajax({
            url: "http://localhost/temo/editing_page/includes/create.inc.php",
            type:'POST',
            data:{
                ok:true,
                titleId:$("#titleId").val()
               
            },
            success: function(){
       window.location.href = "http://localhost/temo/home.php";
            }
    });
    });
});