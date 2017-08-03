<?

$categories = get_the_category($p->ID);

$cat = null;

if(count($categories)) {
	
	//$cat = null;
	
	foreach($categories as $_i => $_cat) {
		
		if($_cat->parent == 1) {
			$cat = &$categories[$_i];
		}
		
	}
	
}

?>

<div class="blog-content-page content-block">
	<div class="container _bcp__container container-content">	
		<div class="breadcrumb-block _oicp__breadcrumb-block">
			<ul class="breadcrumb__list">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>
				<li class="breadcrumb__list-item">
					<a href="<?=l(5);?>" class="breadcrumb__list-link"><?=t(5);?></a>
				</li>
				<?
				if($cat != null) {
					
					if($cat->term_id == 54) {
						$link = l(19);
					} else {
						$link = get_category_link($cat->term_id);
					}
					
				?>
				<li class="breadcrumb__list-item">
					<a href="<?=$link;?>" class="breadcrumb__list-link"><?=$cat->name;?></a>
				</li>
				<?
				}
				?>
				<li class="breadcrumb__list-item is--active"><? the_title();?></li> 
			</ul>
		</div> 
		<div class="text-container">
			<div class="heading-page__hgroup">
				<h1 class="_bcp__heading heading-page"><span><? the_title();?></span></h1>	
			</div>
			<div class="text-block">
				<?
				the_content();
				?>
				<?
					if(get_field('site_link', $this->post['id'])){
				?>
					<p>Сайт проекта: <a href="http://<?=get_field('site_link', $this->post['id'])?>/" target="_black"><?=get_field('site_link', $this->post['id'])?></a></p>
				<?}?>
			</div>
			<?
			$images = get_field('images', $this->post['id']);
			if($images != '' && is_array($images)) {
				if(count($images)) {
					?>
					<div class="lightgallery row _bcp__row-gallery">
					<?
					foreach($images as $img_id) {
					?>
					<a href="<?=$this->Imgs->getImg($img_id, '1200x800');?>" class="cols _bcp__cols-gallery" data-post-id="<?=$img_id;?>" >
						<img src="<?=$this->Imgs->getImg($img_id, '465x310');?>" alt="" class="img-responsive">
					</a>
					<?
					}
					?>
					</div>
					<?
				}
			}
			?>
		</div>
	</div>
</div>