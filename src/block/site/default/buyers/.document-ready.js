var url = window.location.pathname;
$('.buyers-tabs-block a[href="'+url+'"]').parent().addClass('active'); 
/*$('.buyers-tabs-block a').on('mousemove', function(){
	$(this).removeClass("is--hover");
});
$('.buyers-tabs-block a').on('transitionend', function(){
	$(this).addClass("is--hover");
});*/