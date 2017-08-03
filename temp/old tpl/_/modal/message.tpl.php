<div class="modal fade modal-banks" id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-banks__dialog">
		<div class="modal-body modal-banks__body" >
			<div class="modal-banks__line left-vert line-anim vert"></div>
			<div class="modal-banks__line left-horiz line-anim horiz "></div>
			<div class="modal-banks__line right-vert line-anim vert"></div>
			<div class="modal-banks__line right-horiz line-anim horiz "></div>			
			<button type="button" class="btn-site btn-close modal-banks__close modal-close" data-dismiss="modal" aria-hidden="true">
				<svg class="modal-banks__close-rect-block modal-close__rect-block">
					<rect class="modal-banks__close-rect modal-close__rect" x="0" y="0"></rect>
				</svg>
				<svg class="icon-svg icon-cancel" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use>
				</svg>
			</button>
			<div class="modal-content modal-banks__content">				
				<div class="form__heading-block ">
					<h4 class="form__heading modal-banks__heading-form">Ваша заявка успешно отправлена!</h4>
					<div class="modal-banks__note-form">Наши специалисты свяжутся с Вами в ближайшее время.</div>	

				</div>
				<div class="form__btn-block">
					<button type="button" data-dismiss="modal" aria-hidden="true" class="btn-site btn-blue btn-submit form__btn modal-banks__btn">					
						<svg class="rect-block">
							<rect class="rect" x="0" y="0"/>
						</svg>	
						<span class="name">Спасибо!</span>
						<span class="bg"></span>
					</button>
				</div>
				
			</div> 
		</div>
	</div>
</div>