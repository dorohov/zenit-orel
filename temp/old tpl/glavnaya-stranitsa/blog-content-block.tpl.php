<?

$actions = $this->wpq->query( array(
	'post_type' => 'post',
	//'post_parent' => 0,
	//'orderby' => 'menu_order title',
	'posts_per_page' => 10,
	'orderby' => 'date',
	'order'   => 'DESC',
	'tax_query' => array(array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'terms' => array('tag'),
	)),
	'meta_query' => array(
		//'relation' => 'OR',
		array(
			'key' => 'actions',
			'value' => '1'
		),
	),
));

$__post_in_block = 0;

if(count($actions)) {
	
	$__post_in_block = 5;
	
} else {
	
	$__post_in_block = 6;
	
}

$posts = $this->wpq->query( array(
	'post_type' => 'post',
	//'post_parent' => 0,
	//'orderby' => 'menu_order title',
	'posts_per_page' => $__post_in_block,
	'orderby' => 'date',
	'order'   => 'DESC',
	'tax_query' => array(array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'operator' => 'NOT IN',
		'terms' => array('tag'),
	)),
));

$__i = 0;

?>

<div class="blog-content-block">
	<div class="container _bcb__container">	
		<div 
			class="_bcb__line-left-vert line-anim vert wow scaleToBottom"
				data-wow-duration="1s" 
				data-wow-delay="0.7s"
				data-wow-offset="100"
			></div>	
		<div 
			class="_bcb__line-right-horiz line-anim horiz wow scaleToRight"
				data-wow-duration="1s" 
				data-wow-delay="0.7s"
				data-wow-offset="100"
			></div>		
		<div 
			class="_bcb__line-right-vert line-anim vert  wow scaleToBottom"
				data-wow-duration="1s" 
				data-wow-delay="1.7s"
				data-wow-offset="100"
			></div>	
		<div class="row heading-block _bcb__heading-block">
			<div class="cols _bcb__heading-cols 				wow fadeToRight"
					data-wow-duration="1s" 
					data-wow-delay="0.6s"
					data-wow-offset=" ">
				<h2 class="_bcb__heading heading-index-block">Актуальное</h2>
				<h4 class="_bcb__heading-small heading-small-index-block">Действующие акции и свежие новости</h4>
			</div>
			<div class="cols _bcb__btn-cols">
				<a href="<?=l(5);?>" class="btn-site btn-blue btn-more-news">
					<svg class="rect-block">
						<rect class="rect wow draw-btn-rect"
							data-wow-duration="1.7s" 
							data-wow-delay="1s"
							data-wow-offset=" 0" 
							x="0" 
							y="0"/>
					</svg>	
					<span class="name">Больше новостей</span>
					<span class="bg"></span>
				</a>
			</div>
		</div>
			
			
		<div class="row _bcb__row">
			<div class="cols _bcb__cols">
				<div class="_bcb__blog-inner">					
					
					<?
					if(count($actions)) {
					?>
					<div id="blog-carousel" class="carousel blog__carousel _bcb__carousel slide carousel-fade wow fadeToRight"
						data-wow-duration="0.8s" 
						data-wow-delay="0.6s"
						data-wow-offset=" " 
						data-ride="carousel">
						<div class="blog__inner _bcb__carousel-inner carousel-inner">
						
						<?
						foreach($actions as $i => $p) {
							
							$cat = null;
							
							$categories = get_the_category($p->ID);
							if(count($categories)) {
								
								foreach($categories as $_i => $_cat) {
									
									if($_cat->parent == 1) {
										$cat = &$categories[$_i];
									}
									
								}
								
								/*
								if($cat != null) {
									
									$link_cat = get_category_link($cat->term_id);
								
								}
								*/
							
							}
							
							if($p->post_content != '') {
							?>
							
							<a href="<?=l($p->ID);?>" class="blog__carousel-item _bcb__carousel-item item <?if($i == 0){echo 'active';}?>" style="background-image: url(<?=$this->Imgs->postImg($p->ID, 'full');?>)" >
								<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="">
								<!--<div class="blog__carousel-item-inner">
									<div class="blog__carousel-item-cat"><?=(($cat != null) ? ($cat->name) : '');?></div>
									<h4 class="blog__carousel-item-heading"><?=$p->post_title;?></h4>
									<div class="blog__carousel-item-note"><?=meta($p->ID, 'preview');?></div>
								</div>-->
							</a>
							
							<?
							} else {
							?>
							
							<span class="blog__carousel-item _bcb__carousel-item item <?if($i == 0){echo 'active';}?>" style="background-image: url(<?=$this->Imgs->postImg($p->ID, 'full');?>)" >
								<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="">
								<!--<div class="blog__carousel-item-inner">
									<div class="blog__carousel-item-cat"><?=(($cat != null) ? ($cat->name) : '');?></div>
									<h4 class="blog__carousel-item-heading"><?=$p->post_title;?></h4>
									<div class="blog__carousel-item-note"><?=meta($p->ID, 'preview');?></div>
								</div>-->
							</span>
							
							<?
							}
							
							
						?>
							
						<?
						}
						?>
							
						</div>
						<ol class="blog__indicators _bcb__carousel-indicators carousel-indicators">
							
						<?
						foreach($actions as $i => $p) {
						?>
						
						<li 
								data-target="#blog-carousel" 
								data-slide-to="<?=$i;?>"
								class="<?if($i == 0){echo 'active';}?>"
							>
						</li>
						
						<?
						}
						?>
						
						</ol>
						<a class="blog__control  _bcb__carousel-control" href="#blog-carousel" data-slide="prev"></a>
						<a class="blog__control  _bcb__carousel-control" href="#blog-carousel" data-slide="next"></a>
					</div>
					<?
					} else {
					
					
					/*пост 1 вместо слайдера*/
					
					
						$_post = false;
						$_post = @$posts[$__i];
						
						if($_post) {
						
							$cat = null;
							
							$categories = get_the_category($_post->ID);
							if(count($categories)) {
								
								foreach($categories as $_i => $_cat) {
									
									if($_cat->parent == 1) {
										$cat = &$categories[$_i];
									}
									
								}
								
								
								if($cat != null) {
									
									$link_cat = get_category_link($cat->term_id);
								
								}
								
							
							}
						
						?>
						
						<div class="_bcb__blog-panel wow fadeToRight"
											data-wow-duration="0.8s" 
											data-wow-delay="0.7s"
											data-wow-offset="-100">		
							<article class="blog__item">
								<div class="blog__item-inner">
									<div class="blog__item-cat">
										<a href="<?=$link_cat;?>">
											<?=$cat->name;?>
											<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
												<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
											</svg></span>
										</a>
									</div>
									<div class="blog__item-stroke">
										<h4 class="blog__item-heading">
											<a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a>
										</h4>
										<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
									</div>
									<div class="blog__item-date">
										<?=d2r(get_the_date('d F Y', $_post));?>
										<a href="<?=l($_post->ID);?>" class="blog__item-next">
											<svg class="icon-svg icon-arrow-right-bold" role="img">
												<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
											</svg>
										</a>
									</div>
								</div>
								<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
							</article> 	
						</div>
						
						<?
							
							$__i++;
							
						}
						
						
						
					}
					?>
					
					
					<div class="row _bcb__blog-row wow fadeToTop"
							data-wow-duration="0.8s" 
							data-wow-delay="0.7s"
							data-wow-offset="-100">
								
								<?
								
								
								/*пост 2*/
								
								$_post = false;
								$_post = @$posts[$__i];
								
								if($_post) {
								
									$cat = null;
									
									$categories = get_the_category($_post->ID);
									if(count($categories)) {
										
										foreach($categories as $_i => $_cat) {
											
											if($_cat->parent == 1) {
												$cat = &$categories[$_i];
											}
											
										}
										
										
										if($cat != null) {
											
											$link_cat = get_category_link($cat->term_id);
										
										}
										
									
									}
								
								?>
								
								<div class="cols _bcb__blog-cols">		
									<article class="blog__item">
											<div class="blog__item-inner">
												<div class="blog__item-cat">
													<a href="<?=$link_cat;?>">
														<?=$cat->name;?>
														<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
														</svg></span>
													</a>
												</div>
												<div class="blog__item-stroke">
													<h4 class="blog__item-heading"><a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a></h4>
													
													<?
													$_object = meta($_post->ID, 'objacts');
													if($_object != '' && intval($_object)) {
													?>
													<div class="blog__item-note"><?=t($_object);?></div>
													<?
													} else if(meta($_post->ID, 'preview') != '') {
													?>
													<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
													<?
													}
													?>
													
												</div>
												<div class="blog__item-date">
													<?=d2r(get_the_date('d F Y', $_post));?>
													<a href="<?=l($_post->ID);?>" class="blog__item-next">
														<svg class="icon-svg icon-arrow-right-bold" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
														</svg>
													</a>
												</div>
											</div>
											<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
									</article> 
								</div>
								
								<?
									
									$__i++;
									
								}
								
								
								
								/*пост 3*/
								
								$_post = false;
								$_post = @$posts[$__i];
								
								if($_post) {
								
									$cat = null;
									
									$categories = get_the_category($_post->ID);
									if(count($categories)) {
										
										foreach($categories as $_i => $_cat) {
											
											if($_cat->parent == 1) {
												$cat = &$categories[$_i];
											}
											
										}
										
										
										if($cat != null) {
											
											$link_cat = get_category_link($cat->term_id);
										
										}
										
									
									}
								
								?>
								
								<div class="cols _bcb__blog-cols">		
									<article class="blog__item">
											<div class="blog__item-inner">
												<div class="blog__item-cat">
													<a href="<?=$link_cat;?>">
														<?=$cat->name;?>
														<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
														</svg></span>
													</a>
												</div>
												<div class="blog__item-stroke">
													<h4 class="blog__item-heading"><a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a></h4>
													
													<?
													$_object = meta($_post->ID, 'objacts');
													if($_object != '' && intval($_object)) {
													?>
													<div class="blog__item-note"><?=t($_object);?></div>
													<?
													} else if(meta($_post->ID, 'preview') != '') {
													?>
													<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
													<?
													}
													?>
													
												</div>
												<div class="blog__item-date">
													<?=d2r(get_the_date('d F Y', $_post));?>
													<a href="<?=l($_post->ID);?>" class="blog__item-next">
														<svg class="icon-svg icon-arrow-right-bold" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
														</svg>
													</a>
												</div>
											</div>
											<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
									</article> 
								</div>
								
								<?
									
									$__i++;
									
								}
								
								
								
								
								?>
								
					</div>
				</div>
			</div>
			
			
			
			<div class="cols _bcb__cols">		
				<div class="_bcb__blog-inner">			
					<div class="row _bcb__blog-row 				wow fadeToBottom"
										data-wow-duration="0.8s" 
										data-wow-delay="0.7s"
										data-wow-offset=" ">
						<?
						
						
						
								/*пост 4*/
								
								$_post = false;
								$_post = @$posts[$__i];
								
								if($_post) {
								
									$cat = null;
									
									$categories = get_the_category($_post->ID);
									if(count($categories)) {
										
										foreach($categories as $_i => $_cat) {
											
											if($_cat->parent == 1) {
												$cat = &$categories[$_i];
											}
											
										}
										
										
										if($cat != null) {
											
											$link_cat = get_category_link($cat->term_id);
										
										}
										
									
									}
								
								?>
								
								<div class="cols _bcb__blog-cols">		
									<article class="blog__item">
											<div class="blog__item-inner">
												<div class="blog__item-cat">
													<a href="<?=$link_cat;?>">
														<?=$cat->name;?>
														<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
														</svg></span>
													</a>
												</div>
												<div class="blog__item-stroke">
													<h4 class="blog__item-heading"><a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a></h4>
													
													<?
													$_object = meta($_post->ID, 'objacts');
													if($_object != '' && intval($_object)) {
													?>
													<div class="blog__item-note"><?=t($_object);?></div>
													<?
													} else if(meta($_post->ID, 'preview') != '') {
													?>
													<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
													<?
													}
													?>
													
												</div>
												<div class="blog__item-date">
													<?=d2r(get_the_date('d F Y', $_post));?>
													<a href="<?=l($_post->ID);?>" class="blog__item-next">
														<svg class="icon-svg icon-arrow-right-bold" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
														</svg>
													</a>
												</div>
											</div>
											<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
									</article> 
								</div>
								
								<?
									
									$__i++;
									
								}
								
						
						
						
						
						
								/*пост 5*/
								
								$_post = false;
								$_post = @$posts[$__i];
								
								if($_post) {
								
									$cat = null;
									
									$categories = get_the_category($_post->ID);
									if(count($categories)) {
										
										foreach($categories as $_i => $_cat) {
											
											if($_cat->parent == 1) {
												$cat = &$categories[$_i];
											}
											
										}
										
										
										if($cat != null) {
											
											$link_cat = get_category_link($cat->term_id);
										
										}
										
									
									}
								
								?>
								
								<div class="cols _bcb__blog-cols">		
									<article class="blog__item">
											<div class="blog__item-inner">
												<div class="blog__item-cat">
													<a href="<?=$link_cat;?>">
														<?=$cat->name;?>
														<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
														</svg></span>
													</a>
												</div>
												<div class="blog__item-stroke">
													<h4 class="blog__item-heading"><a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a></h4>
													
													<?
													$_object = meta($_post->ID, 'objacts');
													if($_object != '' && intval($_object)) {
													?>
													<div class="blog__item-note"><?=t($_object);?></div>
													<?
													} else if(meta($_post->ID, 'preview') != '') {
													?>
													<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
													<?
													}
													?>
													
												</div>
												<div class="blog__item-date">
													<?=d2r(get_the_date('d F Y', $_post));?>
													<a href="<?=l($_post->ID);?>" class="blog__item-next">
														<svg class="icon-svg icon-arrow-right-bold" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
														</svg>
													</a>
												</div>
											</div>
											<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
									</article> 
								</div>
								
								<?
									
									$__i++;
									
								}
								
						
						
						
						
						?>
					</div>
					
					
					<?
					
					
					
					
					
								/*пост 6*/
								
								$_post = false;
								$_post = @$posts[$__i];
								
								if($_post) {
								
									$cat = null;
									
									$categories = get_the_category($_post->ID);
									if(count($categories)) {
										
										foreach($categories as $_i => $_cat) {
											
											if($_cat->parent == 1) {
												$cat = &$categories[$_i];
											}
											
										}
										
										
										if($cat != null) {
											
											$link_cat = get_category_link($cat->term_id);
										
										}
										
									
									}
								
								?>
				<div class="_bcb__blog-panel 				wow fadeToLeft"
										data-wow-duration="0.8s" 
										data-wow-delay="0.7s"
										data-wow-offset="-100">
								
								
								
								<article class="blog__item">
									<div class="blog__item-inner">
										<div class="blog__item-cat">
											<a href="<?=$link_cat;?>">
												<?=$cat->name;?>
												<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
												</svg></span>
											</a>
										</div>
										<div class="blog__item-stroke">
											<h4 class="blog__item-heading"><a href="<?=l($_post->ID);?>"><?=$_post->post_title;?></a></h4>
											<div class="blog__item-note"><?=meta($_post->ID, 'preview');?></div>
										</div>
										<div class="blog__item-date">
											<?=d2r(get_the_date('d F Y', $_post));?>
											<a href="<?=l($_post->ID);?>" class="blog__item-next">
												<svg class="icon-svg icon-arrow-right-bold" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
												</svg>
											</a>
										</div>
									</div>
									<a href="<?=l($_post->ID);?>" class="blog__item-link">Читать</a>
								</article> 
				</div>
								<?
									
									$__i++;
									
								}
								
					
					
					
					
					
					?>
					
					
					
				</div>
			</div>
			
			
			
		</div>
	</div>
</div>
