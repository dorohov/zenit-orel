<div class="modal fade modal-banks" id="modal-subscribe" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-banks__dialog">
		<div class="modal-body modal-banks__body" >
			<div class="modal-banks__line left-vert line-anim vert"></div>
			<div class="modal-banks__line left-horiz line-anim horiz "></div>
			<div class="modal-banks__line right-vert line-anim vert"></div>
			<div class="modal-banks__line right-horiz line-anim horiz "></div>
			<button type="button" class="btn-site btn-close modal-banks__close modal-close" data-dismiss="modal" aria-hidden="true">
				<svg class="modal-banks__close-rect-block modal-close__rect-block">
					<rect class="modal-banks__close-rect modal-close__rect" x="0" y="0"/>
				</svg>
				<svg class="icon-svg icon-cancel" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use>
				</svg> 
			</button>
			<div class="modal-content modal-banks__content">
				<h3 class="modal-title modal-banks__title">Подписка на новости</h3>				
				<div class="modal-note modal-banks__note">		
					Подпишитесь на новости, чтобы первым получать самую свежую информацию о новых объектах и специальных предложениях компании.
				</div>
				
				<div class="form-site block " >
					<div class="row form__row sp-form sp-form-regular sp-form-embed " id="sp-form-41833" sp-id="41833" sp-hash="da3d45c5cd9debc7d95cbb302897b960f7f21eaa4cbc1280ed341149ff42e851" sp-lang="ru" sp-show-options="{}" >
						<!--
						<div class="cols form__cols sp-message">
							<div></div>
						</div>
						-->
						<div id="droppableArea" class="sp-element-container ui-sortable ui-droppable" >
							<!--
							<div class="cols form__cols sp-field" sp-id="sp-8fd05ef6-e088-4f15-b666-e40acb4a8813">
								<div class="form__item">
									<input type="text" sp-type="name" class="form__control form-control sp-form-control" name="sform[0LjQvNGP]" placeholder="Имя" required="required" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" >
									
								</div>	
							</div>
							-->
							<div class="cols form__cols sp-field" sp-id="sp-08058c7e-f256-4f6e-b4bb-fcc41ddedd0e">
								<div class="form__item" >
									<input type="email" sp-type="email" class="form__control form-control sp-form-control" name="sform[email]" placeholder="E-mail" required="required" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" >
									
								</div>	
							</div>
							<!--
							<div class="cols form__cols sp-field" sp-id="sp-b9d07194-43b0-49c2-af83-a3664e5359f4">
								<div class="form__item">
									<input type="tel" sp-type="phone" class="form__control form-control sp-form-control" name="sform[phone]" placeholder="Телефон" required="required" sp-tips="%7B%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%20%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B0%22%7D" >
									
								</div>	
							</div>
							-->

							<div class="cols form__cols">
								<div class="material-switch form__item"   >
									<input class="material-switch__input " id="ingr_cb" name="ingr_cb" value="1" type="checkbox" />
									<label for="ingr_cb" class="material-switch__label ingr-cb-c-label" ></label>
									<label for="ingr_cb" class="material-switch__text ingr-cb-c-label" > 
										Я согласен на обработку <a href="/agreement/">персональных данных</a>
									</label>
								</div>	
							</div>
							
							<div class="cols form__cols sp-button-container" sp-id="sp-2dae545b-63a1-40d7-a6e8-73e64414675f">
								
								<div class="form__btn-block">
									<button type="button" class="btn-site btn-blue btn-submit form__btn modal-banks__btn sp-button" id="sp-2dae545b-63a1-40d7-a6e8-73e64414675f">
										<svg class="rect-block">
											<rect class="rect {{btn_animation}}"
												data-wow-duration="{{btn_duration}}" 
												data-wow-delay="{{btn_delay}}"
												data-wow-offset="{{btn_offset}}" 
												x="0" 
												y="0"/>
										</svg>	
										<span class="name">Подписаться</span>
										<span class="bg"></span>
									</button>
								</div>
								
								<div class="sp-message"> 
									<div></div>
								</div>
								
							</div>
							
						</div>
						
						
					</div>
				</div>
				
				<script type="text/javascript" src="//cdn.sendpulse.com/apps/fc3/build/default-handler.js"></script>
			</div> 
		</div>
	</div>
</div>
<script>
			$(function(){
				
				$(document.body).on('click', '.ingr-cb-c-label', {}, function(event){
					
					var label = $('.material-switch__label.ingr-cb-c-label');
					var block = $('.sp-button-container');
					
					if($(event.target).attr('href') && $(event.target).attr('href') != '') {
						
					} else {
						
						var is_checked = label.attr('data-checked');
						
						//console.log(is_checked);
						
						if(is_checked == 'checked') {
							block.fadeOut('fast');
							label.attr('data-checked', '');
						} else {
							block.fadeIn('fast');
							label.attr('data-checked', 'checked');
						}
						
					}
					
				});
				
				$('.material-switch__label.ingr-cb-c-label').trigger('click');
				
			});
		</script>