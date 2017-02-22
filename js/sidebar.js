// $("#menu-toggle").(function(e) {
//         e.preventDefault();
//         $("#wrapper").toggleClass("active");
// });

window.onresize	= function() {
	if ($(window).width() <= 800)
		$("#wrapper").hide();
	else 
		$("#wrapper").show();
}