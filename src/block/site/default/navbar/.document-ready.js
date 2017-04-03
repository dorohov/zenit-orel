var url = window.location.pathname;
$('.navbar__modal-nav a[href="'+url+'"]').parent().addClass('active');
if (device.mobile() || device.tablet()) {
	$(".navbar-site").autoHidingNavbar();
}  