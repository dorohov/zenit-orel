<script src="<?=$this->path('js');?>/wow.min.js" ></script>
<script>			
	if($(document.body).find('.page-loader').length > 0) {

	} else {
		var wow = new WOW(
	 		{
				boxClass:     'wow',      
				animateClass: 'animated',
				mobile:       false,
			}
		);
		wow.init();		
	}

		
</script>