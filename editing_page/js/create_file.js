$(function(){
    $(".create").click(function(){
        let stringData = "ok=true";
        $.ajax({
            method: "POST",
            url: "http://localhost/temo/home.php",
            cache:false,
            data:{ok:true}

        });
        });

});