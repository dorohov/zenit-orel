$('img').addClass('img-responsive');
$('.text-block ul').addClass('ul-site');
$('.project-step-panel__item-note ul').addClass('ul-site');
var url = window.location.pathname;
$('.navbar-nav a[href="'+url+'"]').parent().addClass('active'); 


$('.text-block table').addClass('table table-bordered');
$('.text-block .table.table-bordered').parent().addClass('table-responsive');
$('.text-block img').parent().addClass('_tb__img'); 

$('.btn-journal').on('click', function(){
  	$(this).toggleClass('is-active');
  	$("._dicb__journal-list").toggleClass('is-visible');  
});

$('._acb__item ul').addClass('ul-site');

/*
$('.azbn-decor-line.v').each(function(index){
	
	var line = $(this);
	
	var _h = line.outerHeight(true);
	
	line.attr('data-default-height', _h);
	
});
*/