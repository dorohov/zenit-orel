<?

$projects_residential = $this->wpq->query( array(
	'post_type' => 'project',
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('residential'),
	)),
));

$projects_commercial = $this->wpq->query( array(
	'post_type' => 'project',
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('commercial'),
	)),
));

?>
<script>

var SiteData = {
	projects : {
		residential : [
			
			<?
			if(count($projects_residential)) {
				foreach($projects_residential as $p) {
					
					//update_post_meta($p->ID, 'status', trim('2'));
					
			?>
			
			{
				id : '<?=$p->ID;?>',
				link : '<?=l($p->ID);?>',
				title : '<?=$p->post_title;?>',
				lat : parseFloat('<?=meta($p->ID, 'lat');?>'),
				lng : parseFloat('<?=meta($p->ID, 'lng');?>'),
				status : '<?=meta($p->ID, 'status');?>',
				url : '<?=meta($p->ID, 'url');?>',
				marker : null,
			},
			
			<?
				}
			}
			?>
			
		],
		commercial : [
			
			<?
			if(count($projects_commercial)) {
				foreach($projects_commercial as $p) {
			?>
			
			{
				id : '<?=$p->ID;?>',
				link : '<?=l($p->ID);?>',
				title : '<?=$p->post_title;?>',
				lat : parseFloat('<?=meta($p->ID, 'lat');?>'),
				lng : parseFloat('<?=meta($p->ID, 'lng');?>'),
				surface : '<?=meta($p->ID, 'surface');?>',
				marker : null,
			},
			
			<?
				}
			}
			?>
			
		],
	},
	/*
	markers : {
		residential : [],
		commercial : [],
	},
	*/
}

</script>

<!--
<div id="map-google" style="width:800px;height:600px;" ></div>
-->
