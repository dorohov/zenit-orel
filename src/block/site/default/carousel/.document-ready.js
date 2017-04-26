$("#objacts-carousel").carousel();
$("#blog-carousel").carousel();
if(screenJS.isXS() || screenJS.isSM()) {
	
	$("#about-carousel").carousel({
		interval : 0,
	});
	
} else {
	
	$("#about-carousel").carousel({
		//swipe: 10 
	});
	
}