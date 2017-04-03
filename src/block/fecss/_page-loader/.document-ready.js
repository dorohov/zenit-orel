/*
$(window).load(function(event){
	$('.page-loader').removeClass('active');
});
*/

	$('.page-loader .close-loader').on('click',function(event){
		event.preventDefault();
		$('.page-loader').removeClass('active');
	});
	
	$(document.body).on('click.fecss', '.page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level' ,function(event){
		event.preventDefault();
		$('.page-loader')
			.data('window-can-close-it', true)
			.data('counter-can-close-it', true)
			.trigger('fecss.can-close-it');
	});
	
	$(document.body).on('fecss.can-close-it', '.page-loader' ,function(event){
		event.preventDefault();
		
		var block = $(this);
		
		if(block.data('counter-can-close-it') && block.data('window-can-close-it')) {
			
			setTimeout(function(){
				block.removeClass('active');//.delay(2000).empty().remove();
			},85);
			
		}
		
	});
	
	$(window).load(function(event){
		$('.page-loader')
			.data('window-can-close-it', true)
			.trigger('fecss.can-close-it');
		
		$('.page-loader ._czr__preloader-process-container ._czr__preloader-process-level').data('fast-page-loading', true);
		
	});
	
	$(function(){
		var pl = $('.page-loader.active');
		var b = $('._czr__preloader-process-container ._czr__preloader-process-level', pl).eq(0);

		setTimeout(function(){
			$('.page-loader')
			.data('counter-can-close-it', true)
			.trigger('fecss.can-close-it');

		},7500);

		
		/*if(b.size()) {
			
			var pos = 0;
			
			b.css({'width' : pos + '%'}).attr('data-pos', pos);
			
			var intr = setInterval(function() {
				
				var check = Math.random();
				
				if(check > 0.5 && pos < 100) {
					
					pos++;
					
					$('._azbn__preloader-percent').text(pos);
					
					if(b.data('fast-page-loading')) {
						pos = pos + 9;
					}
					
					var h = 100 + (pos);
					//var o = (100 - (pos / 5.5)) / 100;
					
					b.css({
						'width' : pos + '%',
					})
						.attr('data-pos', pos);
					
				} else if(pos > 99) {
					
					clearInterval(intr);
					
					$('.page-loader')
						.data('counter-can-close-it', true)
						.trigger('fecss.can-close-it');
					
				}
				
			}, 40);
		}*/
	});