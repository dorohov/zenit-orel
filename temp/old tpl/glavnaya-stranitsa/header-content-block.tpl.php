<?

$block_id = 386;

?>

<div class="header-content-block " <? if(get_field('bg', $id)){?>style="background-image: url(<?=get_field('bg', $id);?>);" <?}?>>
	<div class="container _hcb__container">
		<div class="_hcb__flex">
			<div class="_hcb__inner">
				<h2 class="_hcb__heading"
				>
					<span class="wow fadeToRightXl"
					data-wow-duration="1s" 
					data-wow-delay="0.6s"
					data-wow-offset=" "><?=get_field('heading_top', $id);?></span> 
					<span class="wow fadeToLeftXl"
					data-wow-duration="1s" 
					data-wow-delay="0.6s"
					data-wow-offset=" "><?=get_field('heading_middle', $id);?></span>
				</h2>
				<h1 class="_hcb__heading-small wow fadeToBottom"
					data-wow-duration="1s" 
					data-wow-delay="1s"
					data-wow-offset="0"
				>
					<?=get_field('heading_bottom', $id);?>
				</h1>
				<div class="row _hcb__row">
					<div class="cols _hcb__cols">
						<div class="_hcb__item wow fadeToRightSm"
							data-wow-duration="1.5s" 
							data-wow-delay="0.5s"
							data-wow-offset=" "
						>
							<div class="_hcb__item-num"><?=meta($block_id, 'info_years_value');?></div>
							<div class="_hcb__item-note">Лет на российском<br>рынке строительства</div>
						</div>
					</div>
					<div class="cols _hcb__cols">
						<div class="_hcb__item wow fadeToRightSm"
							data-wow-duration="1.5s" 
							data-wow-delay="0.8s"
							data-wow-offset=" "
						>
							<div class="_hcb__item-num"><?=meta($block_id, 'info_families_value');?></div>
							<div class="_hcb__item-note">Счастливых<br>семей</div>
						</div>
					</div>
					<div class="cols _hcb__cols">
						<div class="_hcb__item wow fadeToRightSm"
							data-wow-duration="1.5s" 
							data-wow-delay="1s"
							data-wow-offset=" "
						>
							<div class="_hcb__item-num"><?=meta($block_id, 'info_buildings_value');?></div>
							<div class="_hcb__item-note">Готовых<br>объектов</div>
						</div>
					</div>
					<div class="cols _hcb__cols">
						<div class="_hcb__item wow fadeToRightSm"
							data-wow-duration="1.5s" 
							data-wow-delay="1.2s"
							data-wow-offset=" "
						>
							<div class="_hcb__item-num"><?=meta($block_id, 'info_meters_value');?></div>
							<div class="_hcb__item-note">Квадратных метров<br>жилой недвижимости</div>
						</div>
					</div>
					<div class="cols _hcb__cols">
						<div class="_hcb__item wow fadeToRightSm"
							data-wow-duration="1.5s" 
							data-wow-delay="1.4s"
							data-wow-offset=" "
						>
							
							<div class="_hcb__item-num"><?=meta($block_id, 'info_apartments_sold_value');?></div>
							<div class="_hcb__item-note">Квадратных метров&nbsp;— <br> портфель перспективных проектов</div>
						</div>
					</div>
				</div>
			</div>
			<?if(is_user_logged_in()) {?>				
				<a href="#objacts-block" class="scrollto _hcb__scrollto " data-scrollto-diff="-110">
					<svg class="icon-svg icon-arrow-down" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-down"></use>
					</svg>
				</a>
			<?} else {?>				
				<a href="#about-block" class="scrollto _hcb__scrollto " data-scrollto-diff="0">
					<svg class="icon-svg icon-arrow-down" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-down"></use>
					</svg>
				</a>
			<?}?>
		</div>
	</div>
</div>

<script>
(function(){
	
	var hcb = document.getElementsByClassName('header-content-block');
	
	if(sessionStorage.getItem('hide_wow_in_header-content-block')) {
		
		if(hcb.length) {
			
			for(var i = 0; i < hcb.length; i++) {
				
				var _hcb = hcb[i];
				//console.log(_hcb);
				//_nb.setAttribute('class', _nb.getAttribute('class', '').replace(/\s(wow)\s/, ' '));
				
				_hcb.innerHTML = _hcb.innerHTML
					.replace(new RegExp('wow', 'ig'), 'devvovv')
					.replace(new RegExp('fadeTo', 'ig'), 'defadeTo')
				;
				
			}
			
		}
		
	} else {
		
		sessionStorage.setItem('hide_wow_in_header-content-block', true);
		
	}
	
})();
</script>