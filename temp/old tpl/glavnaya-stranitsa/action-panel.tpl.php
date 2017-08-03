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
?>
<?
if(count($actions)) {
?>	
<div class="buyers-panel__panel"> 
	<div 
		class="buyers-panel__line-right-vert line-anim vert wow scaleToBottom"
			data-wow-duration="1s" 
			data-wow-delay="0.5s"
			data-wow-offset="200"
		></div>	
	<div class="container buyers-panel__container">
		<div class="row heading-block buyers-panel__heading-block">
			<div class="cols buyers-panel__heading-cols wow fadeToRight"
				data-wow-duration="0.8s" 
				data-wow-delay="0.6s">
				<h2 class="buyers-panel__heading heading-index-block"><?=get_field('action_heading', $id);?></h2>
				<h4 class="buyers-panel__heading-small heading-small-index-block"><?=get_field('action_heading_sm', $id);?></h4>
			</div>
			<div class="cols buyers-panel__btn-cols">
				<a href="<?=l(19);?>" class="btn-site btn-blue btn-more-news">
					<svg class="rect-block">
						<rect class="rect wow draw-btn-rect"
							data-wow-duration="1.7s" 
							data-wow-delay="1s"
							data-wow-offset=" 0" 
							x="0" 
							y="0"/>
					</svg>	
					<span class="name">Другие акции</span>
					<span class="bg"></span>
				</a>
			</div>
		</div>
		<div class="buyers-panel__owl">
			<?
			foreach($actions as $i => $p) {		
			?>
			<a class="fancybox-preview is--img" href="<?=$this->Imgs->postImg($p->ID, 'full');?>" data-fancybox="action-gallery">
				<img src="<?=$this->Imgs->postImg($p->ID, 'full');?>" alt="">
			 </a>			
			<?
		}
		?>
		</div>
	</div>
</div>
<?
	}
?>
