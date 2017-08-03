<?

/*
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => '10',
	'paged' => $paged,
);
*/

$posts = $this->wpq->query( array(
	'post_type' => 'post',
	'posts_per_page' => -1,
	//'post_parent' => 0,
	'orderby' => 'date',
	'order'   => 'DESC',
	/*
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('residential'),
	)),
	*/
));

?>

<div class="blog-content-page content-block">
	<div class="container _bcp__container container-content">		
		<div class="breadcrumb-block _oacp__breadcrumb-block">
			<ul class="breadcrumb__list">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>
				<li class="breadcrumb__list-item is--active"><? the_title();?></li>
			</ul>
		</div>		
		<div class="heading-page__hgroup _bcp__heading-page__hgroup flex">
			<div>
				<h1 class="_bcp__heading heading-page">
					<span><? the_title();?></span>
				</h1>	
				<? if(get_field('heading_small', 5)){?>
					<h3 class="heading-page-small">
						<?=get_field('heading_small', 5);?>					
					</h3>
				<?}?>
			</div>
			
			<?
			//if(is_user_logged_in()) {
			?>
			<button type="button" class="btn-site btn-blue objacts-map__btn" data-toggle="modal" data-target="#modal-subscribe">
				<svg class="rect-block">
					<rect class="rect" x="0" y="0"/>
				</svg>
				<span class="name">Подписаться на новости</span>
				<span class="bg"></span>
			</button>
			<?
			//}
			?>
		</div>
	</div>
	<div class="_bcp__block">		
		<div class="container _bcp__block-container">
			<div class="row _bcp__block-row">
				<div class="cols _bcp__block-cols-left">
					<div class="row _bcp__blog-row azbn-jqfeShowMoreBtn-container ">						
						<?
						
						if(count($posts)) {
							foreach($posts as $i => $p) {
								
								$post_class = '';
								
								if($i == 0) {
									$post_class = 'two';
								}
								
								$link = l($p->ID);
								$id = $p->ID;
								$img = $this->Imgs->postImg($id, '410x225');
								if($img == '') {
									$img = '/wp-content/themes/azbnbasetheme/img/default/news-lock.jpg';
								}	
								if(is_user_logged_in()) {
								?>
								<div class="cols _bcp__blog-cols azbn-jqfeShowMoreBtn-item" data-post-id="<?=$p->ID;?>">
									<article class="blog-item__item">
										<a href="<?=$link;?>" class="blog-item__preview">
											<img src="<?=$img;?>" alt="<?=$p->post_title;?>">
											<div class="blog-item__date">
												<span class="blog-item__date-icon"><svg class="icon-svg icon-news-date" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#news-date"></use></svg></span>
												<span  class="blog-item__date-val"><?=d2r(get_the_date('d.m', $p));?></span>
											</div>
										</a>
										<h4 class="blog-item__heading"><a href="<?=$link;?>"><?=$p->post_title;?></a></h4>
										<?
										$_object = meta($p->ID, 'objacts');
										$_preview = meta($p->ID, 'preview');
										if($_object != '' && intval($_object)) {
										?>
										<div class="blog-item__note"><?=t($_object);?></div>
										<?} else if($_preview != '') {
										?>
										<div class="blog-item__note"><?=$_preview;?></div>
										<?
										}
										?>
										<div><a href="<?=$link;?>" class="blog-item__link">Подробнее</a></div>
									</article> 
								</div>
								<?}else{?>									
									<div class="cols _bcp__blog-cols azbn-jqfeShowMoreBtn-item <?=$post_class;?> " data-post-id="<?=$p->ID;?>" >
										<article class="blog__item">
											<div class="blog__item-inner">
												
											<?
												$categories = get_the_category($p->ID);
												if(count($categories)) {
													
													$cat = null;
													
													foreach($categories as $_i => $_cat) {
														
														if($_cat->parent == 1) {
															$cat = &$categories[$_i];
														}
														
													}
													
													//var_dump($cat);
													
													if($cat != null) {
														
														if($cat->term_id == 54) {
															$link_cat = l(19);
														} else {
															$link_cat = get_category_link($cat->term_id);
														}
														
											?>
													
													<div class="blog__item-cat">
														<a href="<?=$link_cat;?>">
															<?=$cat->name;?>
															<span><svg class="icon-svg icon-blog-<?=$cat->slug;?>" role="img">
																<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$cat->slug;?>"></use>
															</svg></span>
														</a>
													</div>
													
											<?
													
													}
													
												}
											?>
												
												
												<div class="blog__item-stroke">
													<?//if($p->post_content != '') {?>
													<h4 class="blog__item-heading"><a href="<?=$link;?>"><?=$p->post_title;?></a></h4>
													<?//}else{?>
													<!--<h4 class="blog__item-heading"><?=$p->post_title;?></h4>-->
													<?//}?>
													<!--<div class="blog__item-note"><?=meta($p->ID, 'preview');?></div>-->
													
													<?
													$_object = meta($p->ID, 'objacts');
													$_preview = meta($p->ID, 'preview');
													if($_object != '' && intval($_object)) {
													?>
													<div class="blog__item-note"><?=t($_object);?></div>
													<?} else if($_preview != '') {
													?>
													<div class="blog__item-note"><?=$_preview;?></div>
													<?
													}
													?>
													
												</div>
												<div class="blog__item-date">
													<?=d2r(get_the_date('d F Y', $p));?>
													<?//if($p->post_content != '') {?>
													<a href="<?=$link;?>" class="blog__item-next">
														<svg class="icon-svg icon-arrow-right-bold" role="img">
														<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
														</svg>
													</a>										
													<?//}?>

												</div>
											</div>
											<!--<a href="<?=$link;?>" class="blog__item-link">Читать</a>-->
										</article>
									</div>
									
								<?
								}
							}
						}
						
						?>						
					</div>
					
					
					
				</div>
				
				<?
				$this->tpl('blog/sidebar', array());
				?>
				
				
			</div>
			<?
			//if(is_user_logged_in()) {
			?>
			<div class="row _bcp__blog-row center" >
				<div class="cols" >
					<button type="button" class="btn-site btn-blue objacts-map__btn azbn-jqfeShowMoreBtn-btn" >
						<svg class="rect-block">
							<rect class="rect" x="0" y="0"></rect>
						</svg>
						<span class="name">Еще новости</span>
						<span class="bg"></span>
					</button>
				</div>
			</div>
			<?
			//}
			?>
		</div>
	</div>
</div> 