<?

?>
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightslider.css" />
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightgallery.css" />
<script type="text/javascript">
	$(document).ready(function() {		
		$('#imageGallery').lightSlider({
			gallery:true,
			item:1,
			//loop:true,
			thumbItem:4,
			slideMargin:0,
			thumbMargin: 20,
			galleryMargin: 0, 
			enableDrag: false,
			//verticalHeight: 600,
			adaptiveHeight: true,
			currentPagerPosition:'middle',
			/*onSliderLoad: function(el) {
				el.lightGallery({
					selector: '#imageGallery .lslide'
				});
			}, 	  */
			responsive : [
				{
					breakpoint:767,
					settings: {
						thumbItem:4
					}
				},
				{
					breakpoint:475,
					settings: {
						thumbItem:2
					}
				}
			]
		});  
		
	});
</script>
<!-- light Slider -->
<script src="<?=$this->path('plugins');?>/lightSlider/js/lightslider.min.js"></script>
<!-- light Gallery -->
<script src="<?=$this->path('plugins');?>/lightGallery/js/lightgallery.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-thumbnail.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-zoom.js"></script>
