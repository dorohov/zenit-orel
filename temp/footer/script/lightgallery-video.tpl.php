<?

?>
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightgallery.css" />
<script src="<?=$this->path('plugins');?>/lightGallery/js/lightgallery.js"></script>
<script>
	$(function(){
		$('#about-video-gallery').lightGallery({
			//youtubePlayerParams : {},
			selector : 'this',
			download: false,
			vimeoPlayerParams : {
				autoplay : 1,
				byline : 0,
				title : 0,
			},
		});
	});
</script>