<?

$prefix = 'preload-anim__';

?>

<div class="page-loader active <?=$prefix;?>block " >
	<div class="<?=$prefix;?>inner">
		<div>
			<a class="close-loader <?=$prefix;?>close" href="#not-lazyload" >
				<div id="bodymovin"></div>
			</a>
		</div>
	</div>
</div>
<script>
(function(){
	
	var pl = document.getElementsByClassName('page-loader');
	
	if(sessionStorage.getItem('hide_preloader')) {
		
		if(pl.length) {
			
			for(var i in pl) {
				
				if(pl[i].parentNode) {
					pl[i].parentNode.removeChild(pl[i]);
				}
				
			}
			
		}
		
	} else {
		
		document.write(
			unescape("%3Cscript src='<?=$this->path('js');?>/bodymovin/bodymovin.min.js' type='text/javascript'%3E%3C/script%3E")
		);
		document.write(
			unescape("%3Cscript src='<?=$this->path('js');?>/bodymovin/animation.js' type='text/javascript'%3E%3C/script%3E")
		);
		<?
		/*
		<script src="<?=$this->path('js');?>/bodymovin/bodymovin.min.js"></script>
		<script src="<?=$this->path('js');?>/bodymovin/animation.js"></script>
		*/
		?>
		
		sessionStorage.setItem('hide_preloader', true);
		
	}
	
})();
</script>