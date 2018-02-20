<?
$text = c($id);
if($text != ''){?>
	<div class="text-content-block">
		<div class="container index-text__container">
			<div class="index-text__text">
				<? the_content(); ?>			
			</div>		
		</div>
	</div>	
<?}?>