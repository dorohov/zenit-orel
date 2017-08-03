<?


?>

<div class="objacts-content-block">
	<div class="container _ocb__container">
		<div 
			class="_ocb__line-center-vert line-anim vert wow scaleToBottom"
				data-wow-duration="0.8s" 
				data-wow-delay="0.5s"
				data-wow-offset="150"
			></div>		
		<div 
			class="_ocb__line-center-horiz left line-anim horiz wow scaleToLeft"
				data-wow-duration="0.8s" 
				data-wow-delay="1.3s"
				data-wow-offset="150"
			></div>	
			
		<div 
			class="_ocb__line-center-horiz right line-anim horiz wow scaleToRight"
				data-wow-duration="0.8s" 
				data-wow-delay="1.3s"
				data-wow-offset="150"
			></div>	
		<div class="wow fadeToBottom"
			data-wow-duration="0.8s" 
			data-wow-delay="0.6s"
			data-wow-offset=" ">		
			<h2 class="_ocb__heading heading-index-block">
				<?=get_field('objacts_heading', $id);?>
			</h2>
			<?if (get_field('objacts_heading_small', $id) ){?>
			<h4 class="_ocb__heading-small heading-small-index-block">
				<?=get_field('objacts_heading_small', $id);?>
			</h4>
			<?}?>
		</div>			
		<div class="row _ocb__row">
			<div class="cols _ocb__cols">				
				<a href="<?=l(7);?>" class="_ocb__objacts objacts-block" 
					style="background-image: url(<?=$this->Imgs->postImg(7, 'full');?>)"
				>
					<div class="_ocb__objacts-inner objacts__inner">
						<div class="_ocb__objacts-note objacts__note">
							<div class="_ocb__objacts-line objacts__line top"></div>
							<div class="_ocb__objacts-line objacts__line bottom"></div>
							<div class="_ocb__objacts-square objacts__square ">
								<div class="objacts__square-inner"></div>
							</div>
							<div class="_ocb__objacts-name objacts__name">Квартиры</div>
						</div>
					</div>
				</a>
			</div>
			<div class="cols _ocb__cols">
				<a href="<?=l(9);?>" class="_ocb__objacts objacts-block" 
					style="background-image: url(<?=$this->Imgs->postImg(9, 'full');?>)"
				>
					<div class="_ocb__objacts-inner objacts__inner">
						<div class="_ocb__objacts-note objacts__note">
							<div class="_ocb__objacts-line objacts__line top"></div>
							<div class="_ocb__objacts-line objacts__line bottom"></div>
							<div class="_ocb__objacts-square objacts__square ">
								<div class="objacts__square-inner"></div>
							</div>
							<div class="_ocb__objacts-name objacts__name">
								Коммерческая
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
