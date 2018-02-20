<?

//$prefix = 'preload-anim__';

$class = 'navbar-site';

if(is_front_page()) {
	$class = $class . ' index ';
	$navbar_animation = ' wow fadeToBottom ';
} else {
	$class = $class . ' second ';
	$navbar_animation = ' ';
}

$prefix_block = 'navbar__';

$navbar_duration = '1s';
$navbar_delay = '0.5s';
$navbar_offset = '0';

?>

<nav class="<?=$class;?> <?=$navbar_animation;?>"
	data-wow-duration="<?=$navbar_duration;?>" 
	data-wow-delay="<?=$navbar_delay;?>"
	data-wow-offset="<?=$navbar_offset;?>">
	<div class="container <?=$prefix_block;?>container">
		<div class="row <?=$prefix_block;?>row">

			<div class="cols navbar__cols-icon-tel">
				<a href="tel:+<?=phone(getContact('phone1'));?>" class="navbar__tel-icon"><svg class="icon-svg icon-navbar-tel" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#navbar-tel"></use>
				</svg></a> 
			</div>
			<div class="cols <?=$prefix_block;?>cols-logotip">
				<div class="row <?=$prefix_block;?>row-logotip">
					<div class="cols <?=$prefix_block;?>cols-brand" itemscope itemtype="http://schema.org/Organization" >
						<a class="<?=$prefix_block;?>brand" href="/" itemprop="url" >
							<img src="<?=$this->path('img');?>/default/logotip.png" alt="" itemprop="logo" >
							<span itemprop="name" style="display:none;" >Компания Зенит</span>
							<span itemprop="address" itemtype="http://schema.org/PostalAddress" style="display:none;" ><?=getContact('adr');?></span>
							<span itemprop="telephone" style="display:none;" ><?=getContact('phone1');?></span>
						</a>
					</div>
					<div class="cols <?=$prefix_block;?>cols-tagline">
						Строим для вас<br> и ваших детей
					</div>
				</div>
			</div>
			<div class="cols <?=$prefix_block;?>cols-contacts">
				<div class="<?=$prefix_block;?>phone">
					<a class="roistat-phone" href="tel:<?=phone(getContact('phone1'));?>"><?=getContact('phone1');?></a>
				</div>
				<div class="<?=$prefix_block;?>email">
					<!--<a href="mailto:<?=getContact('email');?>"><?=getContact('email');?></a>-->
					<a href="#callbackwidget" class="callback" >Заказать звонок</a>
				</div>
			</div>		
			<div class="cols <?=$prefix_block;?>cols-hamburger">
				<button type="button" class="btn-site hamburger-base <?=$prefix_block;?>hamburger" data-toggle="modal" data-target="#modal-nav">
					<span class="hamburger-base__inner <?=$prefix_block;?>hamburger-inner">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>
			</div>

			
		</div>
	</div>
</nav>


<script>
(function(){
	
	var nb = document.getElementsByClassName('navbar-site');
	
	if(sessionStorage.getItem('hide_navbar_wow')) {
		
		if(nb.length) {
			
			for(var i = 0; i < nb.length; i++) {
				
				var _nb = nb[i];
				//console.log(_nb);
				_nb.setAttribute('class', _nb.getAttribute('class', '').replace(new RegExp('wow', 'ig'), 'devvovv').replace(new RegExp('fadeTo', 'ig'), 'defadeTo'));
				
			}
			
		}
		
	} else {
		
		sessionStorage.setItem('hide_navbar_wow', true);
		
	}
	
})();
</script>


<div class="modal fade <?=$prefix_block;?>modal" id="modal-nav" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="<?=$prefix_block;?>modal-dialog">
		
		<div class="btn-site <?=$prefix_block;?>hamburger-block">
			<button type="button" class="btn-site hamburger-base <?=$prefix_block;?>hamburger" data-dismiss="modal" aria-hidden="true">
				<span class="hamburger-base__inner <?=$prefix_block;?>hamburger-inner">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</span>
				<svg class="navbar__hamburger-rect-block modal-close__rect-block">
					<rect class="navbar__hamburger-rect modal-close__rect" x="0" y="0"/>
				</svg>
			</button>
		</div>
		<div class="<?=$prefix_block;?>modal-body" >
			<ul class="<?=$prefix_block;?>modal-nav">
				<li class="<?if(in_array($this->post['id'], array(1), false)){echo 'active';}?>" ><a href="<?=l(1);?>"><?=nav(1);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(7), false)){echo 'active';}?>"><a href="<?=l(7);?>" ><?=nav(7);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(9), false)){echo 'active';}?>"><a href="<?=l(9);?>"><?=nav(9);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(11,21,23,25,27), false)){echo 'active';}?> " ><a href="<?=l(23);?>"><?=nav(11);?></a></li> 
				<li class="<?if(in_array($this->post['id'], array(19), false)){echo 'active';}?> " ><a href="<?=l(19);?>"><?=nav(19);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(5), false) || is_singular('post')){echo 'active';}?> " ><a href="<?=l(5);?>"><?=nav(5);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(13), false)){echo 'active';}?> " ><a href="<?=l(13);?>"><?=nav(13);?></a></li>
				<li class="<?if(in_array($this->post['id'], array(3), false)){echo 'active';}?> " ><a href="<?=l(3);?>"><?=nav(3);?></a></li>
				<li><a href="#callbackwidget" class="callback" >Заказать звонок</a></li>
			</ul>
			<?	
				$this->tpl(
					'_/social', 
					array(
						"class"=>"social-block",
						"prefix_block" => "navbar__",
						"prefix_social" => "social__"
					)
				);
			?>
			
		</div>
	</div>
</div>