$(function(){
	$(".avatar").click(function(){
        $(".popup").toggleClass("phide");
    });
    $(".plogout").click(function(){
$.ajax({
	url: "http://localhost/temo/includes/auth/logout.inc.php",
	type: 'POST',      
	cache:false,
	success: function(result) {
		window.location.href = "http://localhost/temo/";
	}
});
    });
	$(".remove").click(function(){
		let id = $(this).children('input').first().val();
$.ajax({
	url: "http://localhost/temo/includes/home/remove.inc.php",
	type: 'POST',       
	data: {
		id:id
	},
	cache:false,
	success: function() {
		window.location.href = "http://localhost/temo/home.php";
	}
});
	});
	$(".edit").click(function(){
		let id = $(this).children('input').first().val();
$.ajax({
	url: "http://localhost/temo/includes/home/editing.inc.php",
	type: 'POST',       
	data:{
		id: id
	},
	cache:false,
	success:function(){
		
		window.location.href = "http://localhost/temo/edit.php";
	}
});
	});
$(".create").click(function(){
    
            $.ajax({
                url: "http://localhost/temo/includes/home/create_file.inc.php",
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