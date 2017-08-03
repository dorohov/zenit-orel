<?
$posts = $this->wpq->query( array(
	'post_type' => 'post',
	//'post_parent' => 0,
	//'orderby' => 'menu_order title',
	'posts_per_page' => 9,
	'orderby' => 'date',
	'order'   => 'DESC',
	'tax_query' => array(array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'operator' => 'NOT IN',
		'terms' => array('tag'),
	)),
));
?>
<div class="blog-panel__panel"> 	
	<div 
		class="blog-panel__line-left-vert line-anim vert wow scaleToBottom"
			data-wow-duration="1s" 
			data-wow-delay="0.7s"
			data-wow-offset="100"
		></div>	
	<div 
		class="blog-panel__line-left-horiz line-anim horiz wow scaleToRight"
			data-wow-duration="1s" 
			data-wow-delay="1.7s"
			data-wow-offset="100"
		></div>
	<div class="container blog-panel__container">
		<div class="row heading-block blog-panel__heading-block">
			<div class="cols blog-panel__heading-cols wow fadeToRight"
					data-wow-duration="0.8s" 
					data-wow-delay="0.6s">
				<h2 class="blog-panel__heading heading-index-block"><?=get_field('blog_heading', $id);?></h2>
				<h4 class="blog-panel__heading-small heading-small-index-block"><?=get_field('blog_heading_sm', $id);?></h4>
			</div>
			<div class="cols blog-panel__btn-cols">
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
		<div class="row blog-panel__row">
			<?						
			if(count($posts)) {
				foreach($posts as $i => $p) {					
					$link = l($p->ID);
					$id = $p->ID;
					$img = $this->Imgs->postImg($id, '410x225');
					if($img == '') {
						$img = '/wp-content/themes/azbnbasetheme/img/default/news-lock.jpg';
					}				
			?>
				<div class="cols blog-panel__cols <?if($i == 8){echo 'is--visible-sm-l';}?>">		
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
					<?
					
				}
			}
			
			?>
			</div>
		</div>
	</div>
</div>