<?

?>
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightgallery.css" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.lightgallery').lightGallery({
			thumbnail:true,	    
			download: false
		}); 
	})
</script>
<!-- light Gallery -->
<script src="<?=$this->path('plugins');?>/lightGallery/js/lightgallery.min.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-thumbnail.min.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-zoom.min.js"></script>