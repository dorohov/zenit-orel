'use strict';
$(function() {
	$('.owl-block').owlCarousel({
		navText: ['<svg class="icon-svg icon-arrow-left-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-left-900"></use></svg>', '<svg class="icon-svg icon-arrow-right-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-right-900"></use></svg>'],
		nav: true,
		dots: false,
		smartSpeed: 500,
		//loop: true,
		//mouseDrag: false,
		responsive : {
			0 : {
				items:1,
				margin: 0,
			},
			570 : {
				items:2,
				margin: 30,
			}
		}
	});	
});