$(document).ready(function() {
    $("#registerForm").validationEngine('attach'); 
	$("#loginForm").validationEngine('attach'); 
	
	
	$("#inregOnClick").on("click", function(){
		$(".tab-menu").find("a:eq(1)").click();
	});
});
