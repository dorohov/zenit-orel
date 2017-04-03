var h_window = $(window).height(), 
	w_window = $(window).width(),

	h_navbar = $('.navbar-site').outerHeight(true),
	h_header = $('.header-site').outerHeight(true),
	h_heading = $('.heading-site').outerHeight(true),
	w_news_preview = $('.news-item__preview').outerWidth(true),
	h_news_block = $('.news-block').outerHeight(true),
	h_footer = $('.footer-site').outerHeight(true),
	h_content_index = h_window - h_navbar,
	h_content_scroller = h_window - h_navbar - h_footer, 
	h_content_scroller_sm = h_window - h_header - h_footer - 100, 
	h_map = h_window - h_navbar - h_footer - h_heading, 
	h_team = h_window - h_footer, 
	h_content = h_window - h_navbar - h_footer,
	h_content_xs = h_window - h_navbar;
	
if (device.mobile()) {	
	//$('.layouts-page-content').css("min-height", h_content_xs);
} else{
	$('.twoGIS-map__block').css("height", h_map);
	$('.twoGIS-map__block').css("height", h_map);
}
if (device.mobile() || device.tablet()) {
	$("._iabai__cols.one").prependTo($("._iabai__row._two"));
	$("._ifbc__btn-block").appendTo($("._ifb__complex"));
	$(".bg-element").remove();
} 