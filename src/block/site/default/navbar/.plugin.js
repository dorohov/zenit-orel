(function() {
	"use strict";
	$(window).load(function(){
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

	});
})();