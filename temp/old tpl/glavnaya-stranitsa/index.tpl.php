<?
/*
$wpq = new WP_Query;
$posts = $wpq->query( array(
	'post_type' => 'page',
	'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	
	//'tax_query' => array(array(
	//	'taxonomy' => 'apartment_taxonomies',
	//	'field' => 'slug',
	//	'terms' => array($cat->slug),
	//)),
	
));

foreach($posts as $post){
	//$rn = get_post_meta($post->ID, 'rooms_number', true);
	echo '<a href="' . l($post->ID) . '" >' . t($post->ID) . '</a><br />';
}
*/


if(is_user_logged_in()) {
	$this->tpl('glavnaya-stranitsa/header-content-block', array());
	$this->tpl('glavnaya-stranitsa/objacts-panel', array());
	$this->tpl('glavnaya-stranitsa/action-panel', array());
	$this->tpl('glavnaya-stranitsa/blog-panel', array());
	$this->tpl('glavnaya-stranitsa/objacts-map-content-block', array());
	$this->tpl('glavnaya-stranitsa/buyers-content-block', array());
	$this->tpl('glavnaya-stranitsa/text-panel', array());
} else {
	$this->tpl('glavnaya-stranitsa/header-content-block', array());
	$this->tpl('glavnaya-stranitsa/about-content-block', array());
	$this->tpl('glavnaya-stranitsa/blog-content-block', array());
	$this->tpl('glavnaya-stranitsa/objacts-content-block', array());
	$this->tpl('glavnaya-stranitsa/objacts-map-content-block', array());
	$this->tpl('glavnaya-stranitsa/buyers-content-block', array());
}