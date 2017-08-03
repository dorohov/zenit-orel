<?


?>

<div class="objacts-map-content-block">
	<div class="container _omcb__container">
		<?if(is_user_logged_in()) {?>
			<div 
			class="_omcb__line-left-vert line-anim vert wow scaleToBottom"
				data-wow-duration="1s" 
				data-wow-delay="1s"
				data-wow-offset="200"
			></div>
		<div 
			class="_omcb__line-left-horiz line-anim horiz wow scaleToRight"
				data-wow-duration="1s" 
				data-wow-delay="0.5s"
				data-wow-offset="200"
			></div>	
		<?}else{?>
			<div 
			class="_omcb__line-left-vert line-anim vert wow scaleToBottom"
				data-wow-duration="1s" 
				data-wow-delay="0.5s"
				data-wow-offset="200"
			></div>	
		<?}?>		
		
		<div class="row _omcb__row">
			<div class="cols _omcb__cols wow fadeToRight"
				data-wow-duration="0.8s" 
				data-wow-delay="0.6s"
				data-wow-offset=" ">				
				<h2 class="_omcb__heading heading-index-block">
					<?=get_field('map_heading', $id);?>		
				</h2>
				<?if (get_field('map_heading_small', $id) ){?>
				<h4 class="_omcb__heading-small heading-small-index-block">
					<?=get_field('map_heading_small', $id);?>
				</h4>
				<?}?>
				<?if (get_field('map_note', $id) ){?>
				<section class="_omcb__text">
					<?=get_field('map_note', $id);?>
				</section>
				<?}?>
			</div>
			<div class="cols _omcb__cols">				
				<?if (get_field('map_text', $id) ){?>
				<div class="_omcb__panel">					
					<div 
						class="_omcb__line-top-right-vert line-anim vert 
						wow scaleToBottom"
							data-wow-duration="1s" 
							data-wow-delay="0s"
							data-wow-offset="200"
						></div>	
					<div 
						class="_omcb__line-top-right-horiz line-anim horiz 
						wow scaleToLeft"
							data-wow-duration="1s" 
							data-wow-delay="1s"
							data-wow-offset="-200"
						></div>	
					<div 
						class="_omcb__line-bottom-right-horiz line-anim horiz wow scaleToLeft"
							data-wow-duration="1s" 
							data-wow-delay="1s"
							data-wow-offset="-200"
						></div>				
					<div 
						class="_omcb__line-bottom-right-vert line-anim vert
						 wow scaleToBottom"
							data-wow-duration="1s" 
							data-wow-delay="2s"
							data-wow-offset="-200"
						></div>	
					<?=get_field('map_text', $id);?>
				</div>
				<?}?>
			</div>
		</div>
			
	</div>
	<div class="_omcb__map-block">
		<div class="container">
			<div class="objacts-map__filter-panel _omcb__filter-panel">
	<ul class="objacts-map__filter _omcb__filter">
		<li>
			<a href="#" class="objacts-map__filter-item _omcb__filter-item is--active azbn-map-filter-btn" data-status-filter="0" title="Все объекты">
				<span class="objacts-map__filter-icon _omcb__filter-icon"><svg class="icon-svg icon-filter-all" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-all"></use>
				</svg></span>
				<span class="objacts-map__filter-name _omcb__filter-name" >Все<br> объекты</span>
			</a>
		</li>
		<li>
			<a href="#" class="objacts-map__filter-item _omcb__filter-item azbn-map-filter-btn" data-status-filter="4" data-status-onsale-filter="1"  title="Квартиры в продаже">
				<span class="objacts-map__filter-icon _omcb__filter-icon"><svg class="icon-svg icon-filter-buy" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-buy"></use>
				</svg></span>
				<span class="objacts-map__filter-name _omcb__filter-name" >Квартиры<br> в&nbsp;продаже</span>
			</a>
		</li>
		<li>
			<a href="#" class="objacts-map__filter-item _omcb__filter-item azbn-map-filter-btn " data-status-filter="1,4" title="Строящиеся объекты">
				<span class="objacts-map__filter-icon _omcb__filter-icon"><svg class="icon-svg icon-filter-build" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-build"></use>
				</svg></span>
				<span class="objacts-map__filter-name _omcb__filter-name">Строящиеся<br> объекты</span>
			</a>
		</li>
		<li>
			<a href="#" class="objacts-map__filter-item _omcb__filter-item azbn-map-filter-btn " data-status-filter="2" title="Объекты, сданные в эксплуатацию">
				<span class="objacts-map__filter-icon _omcb__filter-icon"><svg class="icon-svg icon-filter-ready" role="img">
				<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-ready"></use>
			</svg></span>
				<span class="objacts-map__filter-name _omcb__filter-name">Объекты, сданные<br> в&nbsp;эксплуатацию</span>
			</a>
		</li>
	</ul>
	</div>
		</div>
		<div id="map-google" class="_omcb__map"></div>
	</div>
</div>
