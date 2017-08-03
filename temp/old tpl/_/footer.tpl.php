<?

$class = 'footer-site';
$prefix_block = 'footer__';

if(in_array(get_post_type($this->post['id']), array('post', 'page', 'project'))) {
	$view_count = get_post_meta($this->post['id'], 'view_count', true);
	update_post_meta($this->post['id'], 'view_count', $view_count++);
}

?>


			<footer class="<?=$class;?>">	
				<div class="container <?=$prefix_block;?>container">
					<div class="row <?=$prefix_block;?>row">
						<? if(getContact('copyright')){?>
						<div class="cols <?=$prefix_block;?>copyright-cols">
							<?=getContact('copyright');?>
						</div>
						<?}?>
						
						<div class="cols <?=$prefix_block;?>contacts-cols">
							<div class="row <?=$prefix_block;?>contacts__row">
								<div class="cols">
									<div class="<?=$prefix_block;?>address"><?=getContact('adr');?></div>
								</div>
								<div class="cols">
									<a href="tel:<?=phone(getContact('phone1'));?>" class="<?=$prefix_block;?>phone"><?=getContact('phone1');?></a>
								</div>
								<div class="cols">
									<a href="mailto:<?=getContact('email');?>" class="<?=$prefix_block;?>mailto"><?=getContact('email');?></a>
								</div>
							</div>
						</div>
						<div class="cols <?=$prefix_block;?>soc-cols">
							<?	
								$this->tpl(
									'_/social', 
									array(
										"class"=>"social-block",
										"prefix_block" => "footer__",
										"prefix_social" => "social__"
									)
								);
							?>
						</div>
						<div class="cols <?=$prefix_block;?>dorohovdesign-cols">
							<div class="row <?=$prefix_block;?>dorohovdesign__row"> 
								<div class="cols">
									<div>Создание сайта</div>
								</div>
								<div class="cols">
									<div class="<?=$prefix_block;?>dorohovdesign__logo">
										<a href="http://www.dorohovdesign.ru/" target="_blank">
											
											<svg class="icon-svg icon-dorohovdesign" role="img">
												<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#dorohovdesign"></use>
											</svg>
											
										</a>
									</div>	
								</div>
							</div>				 
						</div>	
					</div>
					<? if(getContact('ofert')){?>
						<div class="<?=$prefix_block;?>ofert">
							<?=getContact('ofert');?>
						</div>
					<?}?>
				</div>
			</footer>

		</div>
		<? wp_footer(); ?>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script src="<?=$this->path('js');?>/jquery.min.js" ></script>
		<script src="<?=$this->path('js');?>/document-ready.js" ></script>
		<script src="<?=$this->path('js');?>/formsave.js" ></script>

		<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
		<script src="<?=$this->path('js');?>/device.min.js" ></script>

		<script src="<?=$this->path('js');?>/svg4everybody.min.js" ></script>
		<script>svg4everybody();</script>

		<? $this->tpl('_/script/wow', array()); ?>


		<?
			if((in_array($this->post['id'], array(1,7,9), false) || is_singular('project'))){
				$this->tpl('_/modal/map', array());
			}

			$this->tpl('_/modal/message', array());

		?>


		<?
			if($this->post['id'] == 1 || $this->post['id'] == 5) {
				$this->tpl('_/script/validationEngine', array());
			}
			if($this->post['id'] == 5) {
				$this->tpl('_/script/page-5', array());
			}
			if($this->post['id'] == 7) {
				$this->tpl('_/script/page-7', array());
			}
		?>
		<?
			if($this->post['id'] == 3) {		
				$this->tpl('_/modal/reviews', array());
				$this->tpl('_/script/googleMapOffice', array());
				$this->tpl('_/script/validationEngine', array());
			}
		?>
		<?
			if($this->post['id'] == 23) {		
				$this->tpl('_/modal/banks', array()); 
				$this->tpl('_/script/validationEngine', array());
				$this->tpl('_/script/owl', array());
				$this->tpl('_/script/fancybox3', array());
			}
		?>
		<?
			if($this->post['id'] == 19) {		
				$this->tpl('_/script/lightgallery', array());
			}
		?>
		<?
			if(get_post_type($this->post['id']) == 'project') {
				$this->tpl('_/script/validationEngine', array());
				$this->tpl('_/script/lightgallery', array());
			}
			if(is_singular('post')) {
				$this->tpl('_/script/lightgallery', array());
				$this->tpl('_/script/validationEngine', array());
			}

			$this->tpl('_/modal/subs', array());
			
			$this->tpl('_/script/metrics', array()); 
		?>
		<?

		if(is_user_logged_in()) {
			if($this->post['id'] == 1) {
				$this->tpl('_/script/owl', array());
				$this->tpl('_/script/fancybox3', array());
			}
		}
		?>
		<?
		/*
		<script>
			$(function(){
				
				var  _i = setInterval(function(){
					
					var _btn = $('a.callbackkiller.cbk-btn');
					
					if(_btn.length) {
						clearInterval(_i);
						
						_btn.get(0).click();
						//$('.callbackkiller.cbk-window .cbk-form.cbk-callform #cbkPhoneInput').val('+70000000000');
						//$('.callbackkiller.cbk-window .cbk-form.cbk-callform #cbkPhoneBtn').get(0).click();
					}
					
				}, 555);
				
			});
		</script>
		*/
		?>
		
	</body>
</html>