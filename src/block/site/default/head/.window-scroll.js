/*
(function(){
	var pos = $(document).scrollTop();
	var semi_screen = $(window).outerHeight(true);
	
	var border = pos + semi_screen;
	
	$('.azbn-decor-line.v').each(function(index){
		
		var line = $(this);
		
		var _h = line.attr('data-default-height') || 0;
		
		var _pos = line.offset().top;
		
		var ratio = (Math.abs(_pos - border) / semi_screen);
		
		if(ratio > 1) {
			ratio = 1;
		}
		
		var percent = 1 - ratio;
		
		line.height((_h * percent * 1.25) + 'px');

		console.log(percent);
		
	});
})();
*/