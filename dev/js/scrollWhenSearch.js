jQuery(document).ready(function($){
	$("#filter_button_filter_module_1").click(function() {
		console.log("scrolling");
		$('html, body').animate({
			scrollTop: $(".Search-results").offset().top
		}, 1000);
	});
});
