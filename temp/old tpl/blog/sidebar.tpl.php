<?

if(isset($param['category'])) {
	$category = &$param['category'];
	$category_id = $category->term_id;
} else {
	$category_id = 0;
}

$categories = array(
	'by-type' => get_categories(array(
		'type' => 'post',
		//'child_of' => 0,
		'parent' => 1,
		//'orderby' => 'name',
		//'order' => 'ASC',
		'hide_empty' => 0,
		//'hierarchical' => 1,
		//'exclude' => '',
		//'include' => '',
		//'number' => 0,
		'taxonomy' => 'category',
		//'pad_counts' => false,
	)),
	'by-object' => get_categories(array(
		'type' => 'post',
		//'child_of' => 0,
		'parent' => 51,
		//'orderby' => 'name',
		//'order' => 'ASC',
		'hide_empty' => 0,
		//'hierarchical' => 1,
		//'exclude' => '',
		//'include' => '',
		//'number' => 0,
		'taxonomy' => 'category',
		//'pad_counts' => false,
	)),
);
//var_dump($categories);

?>

<div class="cols _bcp__block-cols-right">	
	<div class="blog-navbar">
		
		<div class="blog-navbar__collapse">			
			<div class="blog-navbar__inner">
				<div class="search-block">
					<form action="/" method="GET" class="search__form">
						<input type="text" name="s" placeholder="Поиск" class="search__input" value="<?=get_search_query();?>" >
						<button type="submit" class="search__btn-submit">
							<svg class="icon-svg icon-search" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#search"></use>
							</svg>
						</button>
					</form>
				</div>						
				
			
	<?
	
	if(count($categories['by-type'])) {
		?>
		<div class="blog-filter-block">
			<ul class="blog-filter__list _bcp__filter-list">
		<?
		foreach($categories['by-type'] as $cat) {
			
			$uid = $cat->slug;
			if($cat->term_id == 54) {
				$link = l(19);
			} else {
				$link = get_term_link($cat);
			}
			
			?>
			
			<li class="blog-filter__item _bcp__filter-item <?if($category_id == $cat->term_id){echo 'active';}?> ">
				<a href="<?=$link;?>" class="blog-filter__link _bcp__filter-link">
					<span><svg class="icon-svg icon-blog-<?=$uid;?>" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#blog-<?=$uid;?>" ></use>
					</svg></span>
					<?=$cat->name;?>
				</a>
			</li>
			
			<?
		}
		?>
			</ul>
		</div>
		<?
	}
	
	if(count($categories['by-object'])) {
		?>
		<div class="blog-tags-block">
			<ul class="blog-tags__list _bcp__tags-list">
		<?
		foreach($categories['by-object'] as $cat) {
			
			$uid = $cat->slug;
			$link = get_term_link($cat);
			$sidebar_visible = get_field('sidebar_visible', $cat);
			
			if($sidebar_visible) {
			
			?>
			
			<li class="blog-tags__item _bcp__tags-item <?if($category_id == $cat->term_id){echo 'active';}?> ">
				<a href="<?=$link;?>" class="blog-tags__link _bcp__tags-link"><?=$cat->name;?></a>
			</li>
			
			<?
			
			}
			
		}
		?>
			</ul>
		</div>
		<?
	}
	
	?>
		
			</div>
		</div>
		<button type="button" class="blog-navbar__hamburger hamburger hamburger--arrowalt-r" data-toggle-blog=".blog-navbar">
			<span class="hamburger-box blog-navbar__hamburger-box">
				<span class="hamburger-inner blog-navbar__hamburger-inner"></span> 
			</span>
			<span class="blog-navbar__hamburger-name">Меню блога</span>
		</button>
		
	</div>
</div>