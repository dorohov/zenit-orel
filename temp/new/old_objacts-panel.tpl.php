<?

$projects_residential = $this->wpq->query( array(
	'post_type' => 'project',
	'posts_per_page' => 3,
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('residential'),
	)),
));

?>
<div class="objacts-panel__panel" id="objacts-block">
	<div 
		class="objacts-panel__line-left-vert line-anim vert wow scaleToBottom"
			data-wow-duration="1s" 
			data-wow-delay="0.7s"
			data-wow-offset="100"
		></div>	
	<div 
		class="objacts-panel__line-left-horiz line-anim horiz wow scaleToRight"
			data-wow-duration="1s" 
			data-wow-delay="1.7s"
			data-wow-offset="100"
		></div>
	<div class="container objacts-panel__container">			
		<div class="row heading-block objacts-panel__heading-block">
			<div class="cols objacts-panel__heading-cols 				wow fadeToRight"
					data-wow-duration="0.8s" 
					data-wow-delay="0.6s"
					data-wow-offset=" ">
				<h2 class="objacts-panel__heading heading-index-block">
				<?=get_field('objscts_heading', $id);?></h2>
			</div>
			<div class="cols objacts-panel__btn-cols">
				<a href="<?=l(7);?>" class="btn-site btn-blue btn-more-news">
					<svg class="rect-block">
						<rect class="rect wow draw-btn-rect"
							data-wow-duration="1.7s" 
							data-wow-delay="1s"
							data-wow-offset=" 0" 
							x="0" 
							y="0"/>
					</svg>	
					<span class="name">Смотреть все квартиры</span>
					<span class="bg"></span>
				</a>
			</div>
		</div>

		<div class="objacts-panel__owl">
			<?
			if(count($projects_residential)) {
				foreach($projects_residential as $p_index => $p) {
					
					$coloredarea_bg = meta($p->ID, 'coloredarea_bg');
					$coloredarea_text = meta($p->ID, 'coloredarea_text');
					$apartment_free = meta($p->ID, 'apartment_free');
					
					$status = intval(meta($p->ID, 'status'));
					$status_onsale = intval(meta($p->ID, 'status_onsale'));
					
					if($status == 1 || $status == 4) {
						$final_status_text = 'Окончание строительства';
					} else if($status == 2) {
						$final_status_text = 'Дом сдан в эксплуатацию';
					} else {
						$final_status_text = '';
					}
					
					$preview_title = get_post_meta($p->ID, 'preview_title', true);
					$popup_title = get_post_meta($p->ID, 'popup_title', true);
					
			?>

			<div class="objacts-panel__owl-item <?if($p_index == 3){echo 'is--visible-device';}?> " data-status-filter="<?=$status;?>" data-status-onsale-filter="<?=$status_onsale;?>" >
				<a href="<?=get_field('url', $p->ID);?>" 
					target="_blank"
					class="_oacp__objacts objacts-block" 
					style="background-image: url(<?=$this->Imgs->postImg($p->ID, '520x435');?>)"
					data-status-buy="sale"
					data-status-building="{{objacts_status_building}}"
				>
					
					<?
					if($coloredarea_bg != '' && $coloredarea_text != '') {
					?>
					<div class="_oacp__objacts-label objacts__label is--visible">
						<div class="_oacp__objacts-label-inner objacts__label-inner" style="background-color: <?=$coloredarea_bg;?>">
						</div>
						<div class="_oacp__objacts-label-name objacts__label-name"><div><?=$coloredarea_text;?></div></div> 
					</div>
					<?
					}
					?>
					<div class="objacts__panel-name">
						
						<?
						if($preview_title != '') {
							echo $preview_title;
						} else {
							echo $p->post_title;
						}
						?>
						
					</div>
					
					<div class="_oacp__objacts-inner objacts__inner">
						<div class="_oacp__objacts-note objacts__note">
							<div class="_oacp__objacts-line objacts__line top"></div>
							<div class="_oacp__objacts-line objacts__line bottom"></div>
							<div class="_oacp__objacts-line objacts__line bottom"></div>
							<div class="_oacp__objacts-name objacts__name">
								<?
								if($popup_title != '') {
									echo $popup_title;
								} else {
									echo $p->post_title;
								}
								?>
							</div>
							
							<?
							if($apartment_free != '') {
							?>
							<div class="_oacp__objacts-floor objacts__floor" data-buy-floor="<?=$apartment_free;?>">
								квартир<?=word_final($apartment_free);?><br> в продаже
							</div>
							<?
							}
							?>
							
							<?
							if($status) {
							?>
							<div 
								class="_oacp__objacts-finish-date objacts__finish-date" 
								data-finish-date="<?=meta($p->ID, 'status_date');?>">
								<?=$final_status_text;?>
							</div>
							<?
							}
							?>
						</div>
					</div>
				</a>	
			</div>

			<?
				}
			}

			?>
		</div>
	</div>
</div>