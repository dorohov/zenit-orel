<?
if(is_front_page()) {
?>
<div class="index-footer-block " 
				data-_footer="bottom[linear]:-100%;"
				data-end="bottom[linear]:0%;"	>
<?
}
?>
	
	<footer class="footer-site index">	
		<div class="container">
			<div class="row _fs__row">
				<div class="cols _fs__copyright-cols">
					ЗАО «Зенит»
				</div>
				
				<div class="cols _fs__contacts-cols">
					<div class="row _fs__contacts-row">
						<div class="cols">
							<a href="tel:+74862445060" class="_fs__phone _fs__icon">+7 (4862) <span>44-50-60</span></a>
						</div>
						<div class="cols">
							<div class="_fs__address _fs__icon"><span>г. Орёл,</span> ул. Старо-Московская, 10</div>
						</div>
						<div class="cols">
							<a href="mailto:sales@zenit-orel.ru" class="_fs__mailto _fs__icon">sales@zenit-orel.ru</a>
						</div>

					</div>
				</div>
				<div class="cols _fs__soc-cols">				
					<div class="social-block">
		<div class="row social__row">
			<div class="cols">
				<a href="https://vk.com/zao_zenit" target="_blank" class="social__item _vk">
					<svg class="icon-svg icon-vk icon-soc" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#vk"></use>
					</svg> 
				</a>
			</div>
			<div class="cols">
				<a href="https://www.instagram.com/zao_zenit/" target="_blank" class="social__item _inst">
					<svg class="icon-svg icon-inst icon-soc" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use>
					</svg> 
				</a>
			</div>
			<div class="cols">
				<a href="https://www.facebook.com/zaozenit/" target="_blank" class="social__item">
					<svg class="icon-svg icon-fb icon-soc" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#fb"></use>
					</svg> 
				</a>
			</div>
			<div class="cols">
				<a href="https://ok.ru/group/53047194615940" target="_blank" class="social__item">
					<svg class="icon-svg icon-ok icon-soc" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#ok"></use>
					</svg> 
				</a>
			</div>
		</div>
	</div> 
				</div>
				<div class="cols _fs__dorohovdesign-cols">
					<div class="row _fs__dorohovdesign-row"> 
						<div class="cols">
							<div>Создание сайта</div>
						</div>
						<div class="cols">
							<div class="_fs__dorohovdesign__logo">
								<a href="http://www.dorohovdesign.ru/" target="_blank">
									<svg class="icon-svg icon-dorohovdesign {{prefix}}dd" role="img">
										<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#dorohovdesign"></use>
									</svg>
								</a>
							</div>	
						</div>
					</div>
				</div>	
			</div>
		</div>
	</footer>

<?
if(is_front_page()) {
?>
</div>

		<div class="bg-element bg-rect item5 blue-light" 
			data-_rect5--200="top[linear]:100%; visibility[linear]: visible;" 
			data-_rect5="top[linear]:0%;" 
			data-_rect5-700="top[linear]:-120%; visibility[linear]: hidden;"
			>
		</div>
		<div class="bg-element bg-rect item4 blue-gray-light" 
			data-_rect4--800="top[linear]:120%; visibility[linear]: visible;" 
			data-_rect4="top[linear]:50%;" 
			data-_rect4-800="top[linear]:-120%; visibility[linear]: hidden;"
			>
		</div>
		<div class="bg-element bg-rect item6 green-yellow-light"
			data-_rect6--300="top[linear]:120%; visibility[linear]: visible;" 
			data-_rect6="top[linear]:20%;" 
			data-_rect6-500="top[linear]:-120%; visibility[linear]: hidden;">
		</div>
		<div class="bg-element bg-rect item7 blue-light"
			data-_rect7--200="top[linear]:100%; visibility[linear]: visible;" 
			data-_rect7="top[linear]:0%;" 
			data-_rect7-300="top[linear]:-120%; visibility[linear]: hidden;"  
			>
		</div>
		<div class="bg-element bg-rect item8 green-yellow-light"
			data-_rect8--300="top[linear]:100%; visibility[linear]: visible;" 
			data-_rect8="top[linear]:30%;" 
			data-_rect8-300="top[linear]:-120%; visibility[linear]: hidden;">
		</div>
		
<?
}
?>


<div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog _msc__dialog">
		<div class="modal-content _msc__content">
			<div class="modal-body _msc__body" >
				<button type="button" class="btn-site btn-close modal-btn-close" data-dismiss="modal" aria-hidden="true">
					<svg class="icon-svg icon-cancel {{prefix}}icon-cancel" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use>
					</svg>
				</button>
				<div class="modal-block">
					<div class="form-reviews__note">		
					<h3 class="modal-title _msm__title">Ваша заявка успешно отправлена!</h3>
					<div>Наши специалисты свяжутся с Вами в ближайшее время.</div>
					</div>
					<div class="form-reviews__btn-block">
						<button type="button" data-dismiss="modal" aria-hidden="true" class="btn-site btn-mustard btn-submit form-reviews__btn">Спасибо!</button> 
					</div>	 
				</div> 
			</div>
		</div>
	</div>
</div>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?=$this->path('js');?>/jquery.min.js" ></script>
<script src="<?=$this->path('js');?>/azbn-plan-wp.js" ></script>
<script src="<?=$this->path('js');?>/document-ready.js" ></script>

<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
<script src="<?=$this->path('js');?>/device.min.js" ></script>

<script src="<?=$this->path('js');?>/svg4everybody.min.js" ></script>
<script>svg4everybody();</script>

<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightgallery.css" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.imageGallery').lightGallery({
			thumbnail:false,
			download: false
		}); 
	})
</script>
<!-- light Gallery -->
<script src="<?=$this->path('js');?>/../plugins/lightGallery/js/lightgallery.js"></script>
		
<script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script src="<?=$this->path('js');?>/2gis-map.js"></script>

<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/validationEngine.jquery.css">
<script src="<?=$this->path('js');?>/jquery.validationEngine-ru.js" ></script>
<script src="<?=$this->path('js');?>/jquery.validationEngine.js" ></script>
<script>			
	$(document).ready(function () {
		$("form.form-site").validationEngine(
			'attach', {
				promptPosition : 'bottomLeft'
			}
		);
	});
</script>

<script src="<?=$this->path('js');?>/retina.min.js" ></script>
<?
if(is_front_page()) {
?>

<link href="<?=$this->path('css');?>/scrollr-position.css" rel="stylesheet" type="text/css" />
<script src="<?=$this->path('js');?>/skrollr.min.js" ></script>
<script src="<?=$this->path('js');?>/skrollr.menu.js"></script>
<script type="text/javascript">
	$(window).on('resize', function(){
		var params = {};
		if(screenJS.isMDH()){  
			params = {
				header: 				800,
				advantages: 			870,
				header__flat: 			600,
				composition: 			1050,
				icon__down: 			1700,
				equipmen: 				1000,
				equipmen__item: 		1250,
				access: 				1750,//1850
				access__item: 			1750,//1850
				safety: 				2400,//2700,
				safety__item: 			2400,//2700,
				beautification: 		2900,//3200,
				beautification__item: 	2900,//3200,
				parking: 				3350,//3750,
				parking__item: 			3350,//3750,
				backlight: 				3830,//4330,
				flat: 					4300,//4960,
				complex: 				4400,//5100,
				locaion: 				4900,//5800,
				map: 					5150,//6050,
				contacts: 				5050,//6050,
				contacts__item: 		5200,//6150,
				footer: 				5200,//6150,

				round1: 				1000,
				round2: 				1350,
				round3: 				1850,//1950,
				round4: 				2750,//2850,
				round5: 				4260,//4900,
				round6: 				4310,//4950,
				round7: 				5300,//6000,

				rect1: 					1000,
				rect2: 					650,//850,
				rect3: 					2000,
				rect4: 					2050,//2350,
				rect5: 					2625,
				rect6: 					2800,//3000,
				rect7: 					3200,//3400,
				rect8: 					3280,//3550,
				rect9: 					3350,//3880,
				rect10: 				4900,//5800,
				rect11: 				4730,//5590,
				rect12: 				4430//5230
			}
		} else {
			params = {
				header: 				800,
				advantages: 			870,
				header__flat: 			600,
				composition: 			1050,
				icon__down: 			1700,
				equipmen: 				1000,
				equipmen__item: 		1250,
				access: 				1850,//
				access__item: 			1850,
				safety: 				2700,
				safety__item: 			2700,
				beautification: 		3200,
				beautification__item: 	3200,
				parking: 				3750,
				parking__item: 			3750,
				backlight: 				4330,
				flat: 					4960,
				complex: 				5100,
				locaion: 				5800,
				map: 					6050,
				contacts: 				6050,
				contacts__item: 		6150,
				footer: 				6150,

				round1: 				1000,
				round2: 				1350,
				round3: 				1950,
				round4: 				2850,
				round5: 				4900,
				round6: 				4950,
				round7: 				6000,

				rect1: 					1000,
				rect2: 					850,
				rect3: 					2000,
				rect4: 					2350,
				rect5: 					2625,
				rect6: 					3000,
				rect7: 					3400,
				rect8: 					3550,
				rect9: 					3880,
				rect10: 				5800,
				rect11: 				5590,
				rect12: 				5230
			}
		}
		
		if(device.desktop()){
			var s = skrollr.init({
				edgeStrategy: 'set',
				constants: params,
			});
			skrollr.menu.init(s, {});
		}
	});
</script>	

<script src="<?=$this->path('js');?>/plax.js"></script>
<script>
	if(!device.mobile() && !device.tablet()){
	  	$(document).ready(function () {		
			$('.header-preview .parallax-plax').plaxify()
			$('._hp__layer1').plaxify({"xRange":10,"yRange":0,"invert":true,})
			$.plax.enable()
		});
	  }
</script>


<script src="<?=$this->path('js');?>/spin.min.js"></script>
<script>
	if(typeof Spinner != 'undefined') {
		var opts = {
			lines: 11, 
			length: 24, 
			width: 9, 
			radius: 29, 
			scale: 1, 
			corners: 1, 
			color: '#8bcee4', 
			opacity: 0.2, 
			rotate: 0, 
			direction: 1, 
			speed: 1, 
			trail: 60, 
			fps: 20, 
			zIndex: 2e9, 
			className: 'spinner',  
			top: '50%', 
			left: '50%', 
			shadow: false,
			hwaccel: false,
			position: 'absolute'
		};
		var target = document.getElementById('_czr__spinner')
		var spinner = new Spinner(opts).spin(target);				
	}
</script>
<?
}
?>


<?

$updated_at = get_post_meta(1, 'stroycrm_updated_at', true);
if(($updated_at + 3600) < date('U')) {
?>
<script type="text/javascript" src="/editor/dataimport/" charset="UTF-8" async ></script>
<?
}

?>


<?
if(!is_user_logged_in()) {
?>

<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=1df1b39b170d0cb5d3f7be9cf7be70da" charset="UTF-8" async></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter42658474 = new Ya.Metrika({
					id:42658474,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});
		
		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";
		
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42658474" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?
} else {
?>

<?
$this->tpl('editor/modal', array());
?>

<script src="<?=$this->path('js');?>/Azbn7_AjaxUploader.js" ></script>
<script src="<?=$this->path('js');?>/azbn-editor-wp.js" ></script>
<?
}
?>

</body>
</html>