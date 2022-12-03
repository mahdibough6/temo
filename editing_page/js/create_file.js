$(function(){
    $(".create").click(function(){
        $.ajax({
            method: "POST",
            url: "http://localhost/temo/editing_page/includes/create.inc.php",
            cache:false,
            data:{ok:true}

        });
        });
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
});