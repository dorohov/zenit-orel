<?

?>
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightslider.css" />
<link rel="stylesheet" type="text/css" href="<?=$this->path('css');?>/lightgallery.css" />
<script type="text/javascript">
$(document).ready(function() {					
		
		var slides = $('#imageGallery').eq(0).find('._pipc__slider-item');
		
		$(document.body).on('azbn.setSliderCounters', null, {}, function(event, number, all){
			
			$('.azbn-project-slide-number').html(number);
			$('.azbn-project-slide-all').html(all);
			
		});
		
		var $lg = $('#imageGallery');
		
		$lg.lightSlider({
			gallery:true,
			autoWidth: false,
			item:1,
			//loop:true,
			thumbItem:5,
			slideMargin:0,
			thumbMargin: 20,
			galleryMargin: 0, 
			enableDrag: false,
			currentPagerPosition:'middle',
			//counter : true,
			/*
			onAfterSlide: function (el) {
				
				var id = $('#imageGallery').getCurrentSlideCount();
				
				console.log(id);
				
			},
			*/
			onSliderLoad: function(el) {
				el.lightGallery({
					selector: '#imageGallery .lslide',
					showThumbByDefault: true,
					download: false,
					//counter : true,
					//appendCounterTo : '._pipc__count-block',
					/*
					'onAfterSlide.lg' : function(event, prevIndex, index, fromTouch, fromThumb){
						console.log(123);
					},
					*/
					/*
					onAfterSlide : function(event){
						//console.log(index, fromTouch, fromThumb);
						alert('123');
					},
					*/
				});
				
				$('.lSSlideOuter .lSPager.lSGallery li a').on('click', function(event){
					//console.log($(this).closest('li'));
					
					var _items = $(this).closest('.lSGallery').find('li');
					
					$(document.body).trigger('azbn.setSliderCounters',[_items.index($(this).closest('li')) + 1, _items.length]);
					
				});
				
				if (!device.mobile()) {							
					$("._pipc__cols-note").prependTo($(".lSSlideOuter"));
					$("._pipc__soc-block").prependTo($(".lSSlideWrapper"));
					$("._pipc__count-block").appendTo($(".lSSlideWrapper"));
					//$("._pipc__slider-inner").wrap($("._pipc__slider-border"));
				};
				
				$(window).trigger('resize');
				
			}, 	  
			responsive : [
				{
					breakpoint:767,
					settings: {
						thumbItem:4
				  	}
				},
				{
					breakpoint:475,
					settings: {
						thumbItem:2
				  	}
				}
			]
		}); 
		
		$('.lSAction .lSPrev, .lSAction .lSNext').on('click', function(event){
			
			var active = slides.filter('.active');
			
			$(document.body).trigger('azbn.setSliderCounters',[slides.index(active) + 1, slides.length]);
			
		});
		
		$('.lSAction .lSPrev').trigger('click');
		
		
		
	});
</script>
<!-- light Slider -->
<script src="<?=$this->path('plugins');?>/lightSlider/js/lightslider.min.js"></script>
<!-- light Gallery -->
<script src="<?=$this->path('plugins');?>/lightGallery/js/lightgallery.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-thumbnail.js"></script>
<script src="<?=$this->path('plugins');?>/lightGallery/js/lg-zoom.js"></script>