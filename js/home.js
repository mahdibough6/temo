$(function(){
    $(".avatar").click(function(){
        $(".popup").toggleClass("phide");
    });
    $(".create").click(function(){
$.ajax({
	url: "../includes/editing.inc.php",
	type: 'POST',       // You are sending classic $_POST vars.
	data: {
		title: 'untitled'
	},
	dataType: 'JSON',  // You are receiving JSON as the response
	success: function(result) {
		window.location.href = "http://localhost/temo/editing.inc.php";
	}
});
    });
});