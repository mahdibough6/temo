$(function(){
    $(".avatar").click(function(){
        $(".popup").toggleClass("phide");
    });
    $(".plogout").click(function(){
$.ajax({
	url: "http://localhost/temo/includes/logout.inc.php",
	type: 'POST',       // You are sending classic $_POST vars.
	cache:false,
	success: function(result) {
		console.log("hi");
		window.location.href = "http://localhost/temo/";
	}
});
    });
	$(".remove").click(function(){
		let id = $(this).children('input').first().val();
		console.log(id);
$.ajax({
	url: "http://localhost/temo/includes/remove.inc.php",
	type: 'POST',       // You are sending classic $_POST vars.
	data: {
		remove:true,
		id:id
	},
	cache:false,
	success: function(result) {
		console.log("hi");
		window.location.href = "http://localhost/temo/home.php";
	}
});
	});
	$(".file").click(function(){
		let id = $(this).children('input').first().val();
		console.log(id);
$.ajax({
	url: "http://localhost/temo/includes/edit.inc.php",
	type: 'POST',       // You are sending classic $_POST vars.
	data:{
		edit:true,
		id:id
	},
	cache:false,
	success:function(){
		window.location.href = "http://localhost/temo/editing_page/index.php";
	}
});
	});
});