<?

$banks = $this->wpq->query( array(
	'post_type' => 'azbnelement',
	'posts_per_page' => -1,
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'azbnelement_taxonomies',
		'field' => 'slug',
		'terms' => array('banks'),
	)),
));

?>

<div class="buyers-content-block" id="about-block">
	<div class="container _bucb__container">
		
		<?
		if(count($banks)) {
		?>
		<div class="row _bucb__row-banks">
		<?
			foreach($banks as $p) {
				
				/*
				
				*/
				$wow = explode(',', meta($p->ID, 'wow_animation'));
				
		?>
			
			<div class="cols _bucb__cols-banks wow fadeToRight"
				data-wow-duration="<?=trim(@$wow[0]);?>" 
				data-wow-delay="<?=trim(@$wow[1]);?>"
				data-wow-offset="<?=trim(@$wow[2]);?>">
				<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="" />
			</div>
			
		<?
			}
		?>
		</div>
		<?
		}
		?>
		
		<div class="_bucb__btn-block">
			<div 
				class="_bucb__line-center-vert line-anim vert 				wow scaleToBottom"
					data-wow-duration="1.3s" 
					data-wow-delay="1s"
					data-wow-offset="50"
				></div>
			<a href="<?=l(21);?>" class="btn-site btn-blue btn-buyers wow fadeToBottom"
			data-wow-duration="1s" 
			data-wow-delay="0.5s"
			data-wow-offset="50">
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
		<div class="wow fadeToBottom"
			data-wow-duration="0.8s" 
			data-wow-delay="0.5s"
			data-wow-offset="50">
			<h2 class="_bucb__heading heading-index-block">Покупателям</h2>	
			<div class="row _bucb__link-row">
				<div class="cols _bucb__link-cols">
					<a href="<?=l(21);?>" class="_bucb__link-item"><?=t(21);?></a>
				</div>
				<div class="cols _bucb__link-cols">
					<a href="<?=l(23);?>" class="_bucb__link-item"><?=t(23);?></a>
				</div>
				<div class="cols _bucb__link-cols">
					<a href="<?=l(25);?>" class="_bucb__link-item"><?=t(25);?></a>
				</div>
				<div class="cols _bucb__link-cols">
					<a href="<?=l(27);?>" class="_bucb__link-item"><?=t(27);?></a>
				</div>
			</div>
		</div>
		
		<?
		//if(is_user_logged_in()) {
		?>
		
		<div class="_bucb__form-block">		
			<?	
				$this->tpl(
					'_/form', 
					array(
						"class"=>"inline",
						"prefix_block" => "_bucb__",
						"prefix_form" => "form__",
						"heading_form" => "Мы готовы ответить на все ваши вопросы",
						"btn_name" => "Отправить заявку",
						"wow_class"=>" wow draw-btn-rect",
						"wow_duration"=>"1.7s",
						"wow_delay"=>"1s"
					)
				);
			?>
		</div>
		
		<?
		//}
		?>
	</div>
</div>
