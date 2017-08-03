<?


?>

<div class="about-content-block" id="about-block">
	<div class="container _acb__container">		
		<div 
			class="_acb__line-left-vert line-anim vert wow scaleToBottom"
			data-wow-duration="1.5s" 
			data-wow-delay="0.5s"
			data-wow-offset="100"
			></div>	
		<div 
			class="_acb__line-center-vert line-anim vert wow scaleToBottom"
			data-wow-duration="3s"  
			data-wow-delay="0.4s"
			data-wow-offset="100"
			></div>	
		<div 
			class="_acb__line-left-horiz line-anim horiz wow scaleToRight"
			data-wow-duration="1s" 
			data-wow-delay="2s"
			data-wow-offset="100"
			></div>
		<div 
			class="_acb__line-right-vert line-anim vert wow scaleToBottom"
			data-wow-duration="1.5s" 
			data-wow-delay="0.4s"
			data-wow-offset="100"
			></div>
		<div class="row _acb__row">
			<div class="cols _acb__cols-left">
				
				<?
				$gallery_main = get_term_by('id', meta($this->post['id'], 'gallery_main'), 'photo_taxonomies');
				
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
					
					if(count($photos)) {
				?>
				
				<div id="about-carousel" class="carousel-block carousel _acb__carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel__inner _acb__carousel-inner carousel-inner">
						
						<?
						foreach($photos as $i => $p) {
							
							$_i = '' . ($i + 1);
							
							if(strlen($_i) < 2) {
								$_i = '0' . $_i;
							}
							
						?>
						
						<div class="carousel__item _acb__carousel-item item <?if($i == 0) {?>active<?}?> ">
							<div class="row _acb__carousel-row">
								<div class="cols _acb__carousel-cols-note">
									<h4 class="_acb__carousel-heading" data-indicators-count="<?=$_i;?>"><?=$p->post_title;?></h4>
									<p><?=$p->post_content;?></p>
								</div>
								<div class="cols _acb__carousel-cols-img">
									<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="">
								</div>
							</div>
						</div>
						
						
						<?
							
						}
						?>
						
					</div>
					<div class="carousel__indicators _acb__carousel-indicators">
						<div class="carousel__indicators-line _acb__carousel-indicators-line"></div>
						<ol class="carousel__indicators-inner _acb__carousel-indicators-inner carousel-indicators">
							
							<?
							foreach($photos as $i => $p) {
								
								$_i = '' . ($i + 1);
								
								if(strlen($_i) < 2) {
									$_i = '0' . $_i;
								}
								
							?>
							
							<li 
								data-target="#about-carousel" 
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
					<a class="carousel__control _acb__carousel-control" href="#about-carousel" data-slide="prev"></a>
					<a class="carousel__control _acb__carousel-control" href="#about-carousel" data-slide="next"></a>
				</div>
				
				<?
					}
					
				}
				
				?>
				
				

			</div>
			<div class="cols _acb__cols-right 				wow fadeToLeft"
					data-wow-duration="0.8s" 
					data-wow-delay="0.6s"
					data-wow-offset=" ">
				<h2 class="_acb__heading heading-index-block">
					<?=get_field('about_heading', $id);?>		
				</h2>
				<?if (get_field('about_heading_small', $id) ){?>
				<h4 class="_acb__heading-small heading-small-index-block">
					<?=get_field('about_heading_small', $id);?>
				</h4>
				<?}?>
				<?if (get_field('about_note', $id) ){?>
				<section class="text-block _acb__text-block ">
					<?=get_field('about_note', $id);?>
				</section>
				<?}?>				
				<div class="_acb__btn-block">
					<a href="<?=l(13);?>" class="btn-site btn-blue btn-more">
						<svg class="rect-block">
							<rect class="rect wow draw-btn-rect"
								data-wow-duration="1.7s" 
								data-wow-delay="1s"
								data-wow-offset=" 0" 
								x="0" 
								y="0"/>
						</svg>
						<span class="name">Подробнее</span>
						<span class="bg"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
