<script src="<?=$this->path('js');?>/jquery.jqfeShowMoreBtn.js" ></script>
<script class="azbn-page-script" >
$(function(){
	
	(function(){
		
		$('.azbn-jqfeShowMoreBtn-btn')
			.jqfeShowMoreBtn({
				container:'.azbn-jqfeShowMoreBtn-container',
				items:'.azbn-jqfeShowMoreBtn-item',
				display:'block',
				count:((screenJS.screen.w < 1200) ? 12 : 11),
				css_hidden:{
					opacity:0,
				},
				css_visible:{
					opacity:1,
				},
				animation_time:500,
			})
			.trigger('click')
		;
		
	})();
	
});
</script>