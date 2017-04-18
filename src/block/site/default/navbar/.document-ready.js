var url = window.location.pathname;
$('.navbar__modal-nav a[href="'+url+'"]').parent().addClass('active');
if (device.mobile() || device.tablet()) {
	$(".navbar-site").autoHidingNavbar();
} ;
$('#modal-nav').on('show.bs.modal', function (e) {
	$(".navbar-site").addClass("is--open"); 
});
$('#modal-nav').on('hide.bs.modal', function (e) {
	$(".navbar-site").removeClass("is--open"); 
})