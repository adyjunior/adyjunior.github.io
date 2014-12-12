/*
 * 
 * Online CV Project
 * @author Marius Hogas
 * @email mhogas@gmail.com
 * 
 */
 
 // Form Validator
 $(function () {
		$('#submit').formValidator({
			scope		: '#contactme',
			errorDiv	: '#errorDiv1'
		});
	});
	
 $(document).ready(function(){
	
	// Open colorbox links with .cbox class
	$(".cbox").colorbox();
	
	// TOOLTIP
	$('[title]').colorTip();

	// SOCIAL ICONS EFFECT
	$(".social_panel li").hover(function() {
	$(this).siblings().stop().fadeTo(300,0.4);
	}, function() {
		$(this).siblings().stop().fadeTo(400,1);
	});
	
	// Print
	$(".print_button").click(function(){
		 window.print();
		 return false;
	});
	
	// add a 'last' class to each item from skill list & add rollover color to it's info
	$("#skills ul li").each(function(i){
		var remainder = (i + 1) % 3;
		if(remainder === 0){
			$(this).addClass("last");
		}
	}).hover(function() {
		$(this).children("span").css({backgroundColor: '#a7dbd8'});
	}, function () {
		$(this).children("span").css({backgroundColor: '#ccc'});
	});
	
	

});