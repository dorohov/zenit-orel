(function() {
	"use strict";
	$(window).on('load',function(){
		$("[data-toggle-nav]").click(function() {
			var toggle_el = $(this).data("toggle-nav"); 
			$(toggle_el).toggleClass("open-sidebar");
		});
		$("[data-collapse-nav]").click(function() {
			var toggle_el = $(this).data("collapse-nav"); 
			$(toggle_el).toggleClass("open");
		});
		$("[data-body]").click(function() {
			var toggle_el = $(this).data("body"); 
			$(toggle_el).toggleClass("open-navbar");
		});
		$("[data-toggle-blog]").click(function() {
			var toggle_el = $(this).data("toggle-blog"); 
			$(toggle_el).toggleClass("is--open");
			$(this).toggleClass("is--active"); 
			$("body").toggleClass("blog-navbar--open"); 
		});
	});
})();