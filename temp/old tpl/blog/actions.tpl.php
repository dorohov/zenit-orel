<?

$posts = $this->wpq->query( array(
	'post_type' => 'post',
	//'post_parent' => 0,
	//'orderby' => 'menu_order title',
	'posts_per_page' => -1,
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

?>

<div class="blog-content-page content-block">
	<div class="container _bcp__container container-content">		
		<div class="breadcrumb-block _oacp__breadcrumb-block">
			<ul class="breadcrumb__list">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>
				<li class="breadcrumb__list-item">
					<a href="<?=l(5);?>" class="breadcrumb__list-link"><?=t(5);?></a>
				</li>
				<li class="breadcrumb__list-item is--active"><? the_title();?></li>
			</ul>
		</div>		
		<div class="heading-page__hgroup _bcp__heading-page__hgroup flex">
			<div>
				<h1 class="_bcp__heading heading-page">
					<span><? the_title();?></span>
				</h1>	
				<? if(get_field('heading_small', 19)){?>
					<h3 class="heading-page-small">
						<?=get_field('heading_small', 19);?>					
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
					<div class="row _bcp__blog-row lightgallery">
						
						<?
						
						if(count($posts)) {
							foreach($posts as $i => $p) {
								
								$link = l($p->ID);
								
								?>									
									<a href="<?=$this->Imgs->postImg($p->ID, 'full');?>" class="cols _bcp__blog-cols cols6">
										<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" />
									</a>
									
								<?
								
								
							}
						}
						
						?>
						
						<?
						/*
						if(count($posts)) {
							foreach($posts as $i => $p) {
								
								$link = l($p->ID);
								
								if($p->post_content != '') {
								?>
									
									<a href="<?=$link;?>" class="cols _bcp__blog-cols cols6">
										<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" />
									</a>
									
								<?
								} else {
								?>
									
									<a href="<?=$this->Imgs->postImg($p->ID, 'full');?>" class="cols _bcp__blog-cols cols6">
										<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" />
									</a>
									
								<?
								}
								
							}
						}
						*/
						?>
						
					</div>
				</div>
				
				<?
				$this->tpl('blog/sidebar', array(
					'category' => get_category(54),
				));
				?>
				
				
			</div>
		</div>
	</div>
</div>