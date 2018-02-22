<?

$other_projects_params = array(
	'posts_per_page' => 6,
	'term_slug' => 'residential',
);

$categories = get_the_terms($this->post['id'], 'project_taxonomies');

if(count($categories)) {
	
	$main_cat = &$categories[0];
	
	if($main_cat->term_id == 2) {
		
		$parent_page = get_post(7);
		
		$other_projects_params = array(
			'posts_per_page' => 6,
			'term_slug' => 'residential',
		);
		
	} else if($main_cat->term_id == 3) {
		
		$parent_page = get_post(9);
		
		$other_projects_params = array(
			'posts_per_page' => 3,
			'term_slug' => 'commercial',
		);
		
	}
	
}


$other_projects = $this->wpq->query( array(
	'post_type' => 'project',
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'post__not_in' => array($this->post['id']),
	'posts_per_page' => $other_projects_params['posts_per_page'],
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array($other_projects_params['term_slug']),
	)),
));


$status_date = meta($this->post['id'], 'status_date');

$stat_key = meta($this->post['id'], 'stat_key');
$stat_value = meta($this->post['id'], 'stat_value');

?>

<div class="objects-item-content-page content-block">
	<div class="container container-content">		
		<div class="breadcrumb-block _oicp__breadcrumb-block">
	<ul class="breadcrumb__list" itemscope="" itemtype="http://schema.org/BreadcrumbList" >
		<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>
		<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item">
			<a href="<?=l($parent_page->ID);?>" class="breadcrumb__list-link"><?=$parent_page->post_title;?></a>
		</li>
		<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item is--active"><? the_title();?></li> 
	</ul>
</div> 
		<div class="row _oicp__row">
			<div class="cols _oicp__cols">
				<div class="heading-page__hgroup _oicp__heading-page__hgroup">
					<h1 class="_oicp__heading heading-page"><? the_title();?></h1>	
					<?
					if($status_date != '') {
					?>
					<h3 class="heading-page-small">Окончание строительства - <?=$status_date;?></h3>
					<?
					} else if($stat_key != '' && $stat_value != '') {
					?>
					<h3 class="heading-page-small"><?=$stat_key;?> - <?=$stat_value;?></h3>
					<?
					}
					?>
				</div>
				<div class="_oicp__text-block text-block">
					<?
					the_content();
					?>
				</div>
				<div class="_oicp__btn-block">
					<div class="row _oicp__btn-block-row">					
						
						<?
							$video = meta($this->post['id'], 'video');
							if($video != '') {
						?>
						<div class="cols _oicp__btn-block-cols">
							<a href="#" class="btn-site btn-blue btn-objacts-site azbn-show-video-btn" data-iframe-url="https://www.youtube.com/embed/<?=$video;?>?autoplay=1"> 
								<svg class="rect-block">
									<rect class="rect" x="0" y="0"/>
								</svg>
								<span class="name">Смотреть видео</span>
								<span class="bg"></span>
							</a>
						</div>	
						<div class="modal fade modal-video" id="modal-objacts-video" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-video__dialog">
								<div class="modal-content modal-video__content">
									<div class="modal-body modal-video__body" >
										<button type="button" class="btn-site btn-close modal-video__close modal-close" data-dismiss="modal" aria-hidden="true">
											<svg class="modal-video__close-rect-block modal-close__rect-block">
												<rect class="modal-video__close-rect modal-close__rect" x="0" y="0"/>
											</svg>
											<svg class="icon-svg icon-cancel" role="img">
												<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use>
											</svg> 
										</button>	
										<iframe src="" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>						
						<?
							}

							$url = meta($this->post['id'], 'url');
							if($url != '') {
						?>							
						<div class="cols _oicp__btn-block-cols">
							<a href="<?=$url;?>" class="btn-site btn-blue btn-objacts-site" target="_blank">
								<svg class="rect-block">
									<rect class="rect" x="0" y="0"/>
								</svg>
								<span class="name">На сайт объекта</span>
								<span class="bg"></span>
							</a>
						</div>							
						<?
							}
						?>
					</div>
				</div>
			</div>
			<div class="cols _oicp__cols">
				
				<?
				$gallery_main = get_term_by('id', meta($this->post['id'], 'gallery_main'), 'photo_taxonomies');
				//$gallery_main = meta($this->post['id'], 'gallery_main');
				//var_dump($gallery_main);
				if($gallery_main) {
					
					$photos = $this->wpq->query( array(
						'post_type' => 'photo',
						//'post_parent' => 0,
						'orderby' => 'menu_order title',
						'order'   => 'ASC',
						'tax_query' => array(array(
							'taxonomy' => 'photo_taxonomies',
							'field' => 'slug',
							'terms' => array($gallery_main->slug),
						)),
					));
					
					if(count($photos) > 1) {
					
				?>
				
				<div id="objacts-carousel" class="carousel-block carousel _oicp__carousel slide carousel-fade" data-ride="carousel">
					<div class="lightgallery carousel__inner _oicp__carousel-inner carousel-inner">
						
						<?
						foreach($photos as $i => $p) {
							
							$_i = '' . ($i + 1);
							
							if(strlen($_i) < 2) {
								$_i = '0' . $_i;
							}
							
						?>

						<a href="<?=$this->Imgs->postImg($p->ID, '1200x800');?>" class="carousel__item _oicp__carousel-item item <?if($i == 0) {?>active<?}?> ">
							<img src="<?=$this->Imgs->postImg($p->ID, '795x400');?>" alt="" class="_oicp__carousel-img">
							<div class=" _oicp__carousel-cols-note">
								<h4 class="_oicp__carousel-heading" data-indicators-count="<?=$_i;?>"><?=$p->post_title;?></h4> 
								<p><?=$p->post_content;?></p>
							</div>				
						</a>
						
						<?
						}
						?>
						
						
					</div>
					<div class="carousel__indicators _oicp__carousel-indicators">
						<div class="carousel__indicators-line _oicp__carousel-indicators-line"></div>
						<ol class="carousel__indicators-inner _oicp__carousel-indicators-inner carousel-indicators">
							
							<?
							foreach($photos as $i => $p) {
								
								$_i = '' . ($i + 1);
								
								if(strlen($_i) < 2) {
									$_i = '0' . $_i;
								}
								
							?>
							
							<li 
								data-target="#objacts-carousel" 
								data-slide-to="<?=$i;?>"
								data-indicators-count="<?=$_i;?>"
								data-indicators-name="<?=$p->post_title;?>"
								class="<?if($i == 0) {?>active<?}?>"
							>
								<span></span>
							</li>
							
							<?
							}
							?>
							
						</ol>
					</div>
					<a class="carousel__control _oicp__carousel-control" href="#objacts-carousel" data-slide="prev"></a>
					<a class="carousel__control _oicp__carousel-control" href="#objacts-carousel" data-slide="next"></a>
				</div>
				<?
					} elseif(count($photos) == 1) {
				?>
				<div class="lightgallery">					
					<a href="<?=$this->Imgs->postImg($p->ID, '1200x800');?>"><img src="<?=$this->Imgs->postImg($p->ID, '795x530');?>" alt=""></a>
				</div>
				<?
					}
				}
				?>
				
			</div>
		</div>
		

		<div class="objacts-map__panel">				
			<button type="button" class="btn-site btn-blue objacts-map__btn grey azbn-map-view-project-btn " data-project-id="<?=$this->post['id'];?>" data-toggle="modal" data-target="#modal-objacts-map">	
				<svg class="rect-block">
					<rect class="rect wow draw-btn-rect"
						data-wow-duration="1.7s" 
						data-wow-delay="1s"
						data-wow-offset="50" 
						x="0" 
						y="0"/>
				</svg>	
				<span class="name">Посмотреть на карте</span>
				<span class="bg"></span>
			</button> 
		</div> 


<?
if(count($other_projects)) {
	
	?>
	
	<div class="_oicp__more-objacts">
			<div class="heading-page__hgroup _oicp__heading-page__hgroup-more">
				<h2 class="_oicp__heading heading-page">Другие проекты</h2>	
				<h3 class="heading-page-small">Выберите понравившийся проект</h3>		
				<div 
					class="_oicp__line-center-horiz left line-anim horiz wow scaleToLeft"
					data-wow-duration="0.5s" 
					data-wow-delay="0.4s"
					data-wow-offset="50"
					></div>	
					
				<div 
					class="_oicp__line-center-horiz right line-anim horiz wow scaleToRight"
					data-wow-duration="0.5s" 
					data-wow-delay="0.4s"
					data-wow-offset="50"
					></div>	
				<div 
					class="_oicp__line-center-vert line-anim vert  wow scaleToBottom"
					data-wow-duration="0.5s" 
					data-wow-delay="0.8s"
					data-wow-offset="50"
					></div>	
			</div>
			<div class="row _oacp__row">
	
	<?
	
	foreach($other_projects as $p) {
		
		$coloredarea_bg = meta($p->ID, 'coloredarea_bg');
		$coloredarea_text = meta($p->ID, 'coloredarea_text');
		$apartment_free = meta($p->ID, 'apartment_free');
		
		$status = intval(meta($p->ID, 'status'));
		
		if($status == 1 || $status == 4) {
			$final_status_text = 'Окончание строительства';
		} else if($status == 2) {
			$final_status_text = 'Дом сдан в эксплуатацию';
		} else {
			$final_status_text = '';
		}
		
	?>
				
				<div class="cols _oacp__cols" data-status-filter="<?=$status;?>" >
					<a href="<?=l($p->ID);?>" 
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
							<div class="_oacp__objacts-label-name objacts__label-name"><?=$coloredarea_text;?></div> 
						</div>
						<?
						}
						?>
						
						
						<div class="_oacp__objacts-inner objacts__inner">
							<div class="_oacp__objacts-note objacts__note">
								<div class="_oacp__objacts-line objacts__line top"></div>
								<div class="_oacp__objacts-line objacts__line bottom"></div>
								<div class="_oacp__objacts-line objacts__line bottom"></div>
								<div class="_oacp__objacts-name objacts__name">
									<?=$p->post_title;?>
								</div>
								
								<?
								if($apartment_free != '') {
								?>
								<div class="_oacp__objacts-floor objacts__floor" data-buy-floor="<?=$apartment_free;?>">
									квартир<br> в продаже
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
	?>
	
			</div>	
			<div 
				class="_oicp__line-center-vert-bottom line-anim vert  wow scaleToBottom"
				data-wow-duration="0.5s" 
				data-wow-delay="0.4s"
				data-wow-offset="50"
				></div>				
			<div 
				class="_oicp__line-center-horiz-bottom left line-anim horiz wow scaleToLeft"
				data-wow-duration="0.5s" 
				data-wow-delay="0.8s"
				data-wow-offset="50"
				></div>	
				
			<div 
				class="_oicp__line-center-horiz-bottom right line-anim horiz wow scaleToRight"
				data-wow-duration="0.5s" 
				data-wow-delay="0.8s"
				data-wow-offset="50"
				></div>
		</div>
	
	<?
}
?>


		
		<div class="_oicp__form-block">		
			<?	
				$this->tpl(
					'_/form', 
					array(
						"class"=>"inline",
						"prefix_block" => "_bucb__",
						"prefix_form" => "form__",
						"heading_form" => "Поможем определиться с выбором",
						"note_form" => "Наши менеджеры подберут для Вас оптимальный вариант идеального жилья.",
						"btn_name" => "Отправить заявку",
						"wow_class"=>" wow draw-btn-rect",
						"wow_duration"=>"1.7s",
						"wow_delay"=>"1s"
					)
				);
			?>	
		</div>


	</div>
</div>