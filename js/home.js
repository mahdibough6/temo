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
});