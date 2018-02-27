<?

/*
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => '10',
	'paged' => $paged,
);
*/

$posts = &$param['posts'];

$category = get_queried_object();

?>

<div class="blog-content-page content-block">
	<div class="container _bcp__container container-content">		
		<div class="breadcrumb-block _oacp__breadcrumb-block">
			<ul class="breadcrumb__list" itemscope="" itemtype="http://schema.org/BreadcrumbList" >
				<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item">
					<a href="/" class="breadcrumb__list-link">Главная</a>
				</li>
				<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item">
					<a href="<?=l(5);?>" class="breadcrumb__list-link"><?=t(5);?></a>
				</li>
				<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb__list-item is--active"><?=$category->name;?></li>
			</ul>
		</div>		
		<div class="heading-page__hgroup _bcp__heading-page__hgroup flex">
			<div>
				<h1 class="_bcp__heading heading-page ">
					<span><?=$category->name;?></span>
				</h1>	
				<h3 class="heading-page-small">Записи по теме</h3>
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
					<div class="row _bcp__blog-row">
						
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
					?>
					<div class="cols _bcp__blog-cols">
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
							if($_preview != '') {
							?>
							<div class="blog-item__note"><?=$_preview;?></div>
							<?} else if($_object != '' && intval($_object)) {
							?>
							<div class="blog-item__note"><?=t($_object);?></div>
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
				
				<?
				$this->tpl('blog/sidebar', array(
					'category' => $category,
				));
				?>
				
				
			</div>
		</div>
	</div>
</div>