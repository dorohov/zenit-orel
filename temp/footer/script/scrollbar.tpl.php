<?

?>
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/scrollbar.jquery.css">
<script src="<?=$this->path('js');?>/scrollbar.jquery/jquery.mCustomScrollbar.min.js"></script>
<script>	
	if (!device.mobile() || !device.tablet()) {	
		$(document).ready(function () {    
			$(".scroller").mCustomScrollbar();
		});
	}
</script>