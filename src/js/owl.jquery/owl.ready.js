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
	$('.buyers-panel__owl').owlCarousel({
		navText: ['<svg class="icon-svg icon-arrow-left-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-left-900"></use></svg>', '<svg class="icon-svg icon-arrow-right-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-right-900"></use></svg>'],
		nav: true,
		dots: true,
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
	$('.objacts-panel__owl').owlCarousel({
		navText: ['<svg class="icon-svg icon-arrow-left-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-left-900"></use></svg>', '<svg class="icon-svg icon-arrow-right-900" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-right-900"></use></svg>'],
		nav: true,
		dots: true,
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
			},
			1025 : {
				items:3,
				margin: 30,
			}
		}
	});	

	$('.owl-index-header').owlCarousel({
		navText: ['<svg class="icon-svg icon-arrow-left-400" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-left-400"></use></svg>', '<svg class="icon-svg icon-arrow-right-400" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#arrow-right-400"></use></svg>'],
		loop: true,
		//center: true,
		//autoplay: true,
		autoplayTimeout: 3500,
		smartSpeed: 500,
		dots: true,
		nav: false,
		responsive:{
			0:{
				nav: false,
				items: 1,
				//autoWidth:false,
				margin: 10
			},
			560:{
				//nav: false,
				nav: true,
				items: 1,
				//autoWidth:false,
				margin: 30,
			},
			768:{
				nav: true,
				items: 1,
				//autoWidth:false,
				margin: 30,
			},
			1025:{
				//autoWidth:true,
				margin: 20,
				items: 1,
				nav: true,
			}
		}
	});
});