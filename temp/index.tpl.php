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
		<li class="breadcrumb__list-item is--active">Блог компании</li>
	</ul>
</div>		
		<div class="heading-page__hgroup _bcp__heading-page__hgroup">
			<h1 class="_bcp__heading heading-page line"><span>Блог компании</span></h1>	
			<h3 class="heading-page-small">Актуальное и свежее</h3>
		</div>
	</div>
	<div class="_bcp__block">		
		<div class="container _bcp__block-container">
			<div class="row _bcp__block-row">
				<div class="cols _bcp__block-cols-left">
					<div class="row _bcp__blog-row">
						
			<?
			
			if(count($posts)) {
				foreach($posts as $i => $p) {
					
					$post_class = '';
					
					if($i == 0) {
						$post_class = 'two';
					}
					
					$link = l($p->ID);
					
					?>
						
						<div class="cols _bcp__blog-cols <?=$post_class;?> ">
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
										
										$link_cat = get_category_link($cat->term_id);
											
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
										<h4 class="blog__item-heading"><a href="<?=$link;?>"><?=$p->post_title;?></a></h4>
										<!--<div class="blog__item-note"><?=meta($p->ID, 'preview');?></div>-->
										
										<?
										$_object = meta($p->ID, 'objacts');
										if($_object != '' && intval($_object)) {
										?>
										<div class="blog__item-note"><?=t($_object);?></div>
										<?
										}
										?>
										
									</div>
									<div class="blog__item-date">
										<?=d2r(get_the_date('d F Y', $p));?>
										<a href="<?=$link;?>" class="blog__item-next"><svg class="icon-svg icon-arrow-right-bold" role="img">
											<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#arrow-right-bold"></use>
										</svg>
										</a>
									</div>
								</div>
								<a href="<?=$link;?>" class="blog__item-link">Читать</a>
							</article>
						</div>
						
					<?
					
				}
			}
			
			?>
						
					</div>
				</div>
				
				<?
				$this->tpl('blog/sidebar', array());
				?>
				
				
			</div>
		</div>
	</div>
</div>