<div class="<?=$param["class"];?> <?=$param["prefix_block"];?>social-block">
	<div class="row <?=$param["prefix_social"];?>row">
		<? if(getContact('vk')){?>
		<div class="cols">
			<a href="<?=getContact('vk');?>" target="_blank" class="<?=$param["prefix_social"];?>item _vk">
				
				<svg class="icon-svg icon-vk" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#vk"></use>
				</svg>
				
			</a>
		</div>
		<?}?>
		<? if(getContact('inst')){?>
		<div class="cols">
			<a href="<?=getContact('inst');?>" target="_blank" class="<?=$param["prefix_social"];?>item _inst">
				
				<svg class="icon-svg icon-inst" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use>
				</svg>
				
			</a>
		</div>
		<?}?>
		<? if(getContact('fb')){?>
		<div class="cols">
			<a href="<?=getContact('fb');?>" target="_blank" class="<?=$param["prefix_social"];?>item">
				
				<svg class="icon-svg icon-fb" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#fb"></use>
				</svg>
				
			</a>
		</div>
		<?}?>
		<? if(getContact('ok')){?>
		<div class="cols">
			<a href="<?=getContact('ok');?>" target="_blank" class="<?=$param["prefix_social"];?>item">
				
				<svg class="icon-svg icon-ok" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#ok"></use>
				</svg>
				
			</a>
		</div>
		<?}?>
		<? if(getContact('yb')){?>
		<div class="cols">
			<a href="<?=getContact('yb');?>" target="_blank" class="<?=$param["prefix_social"];?>item">
				
				<svg class="icon-svg icon-yb" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#yb"></use>
				</svg>
				
			</a>
		</div>
		<?}?>
		
		<? if(getContact('viber')){?>
		<div class="cols">
			<a href="viber://public?id=<?=getContact('viber');?>" class="<?=$param["prefix_social"];?>item">
				<svg class="icon-svg icon-viber" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#viber"></use> 
				</svg> 
			</a>
		</div>
		<?}?>
		<? if(getContact('tme')){?>
		<div class="cols">
			<a href="<?=getContact('tme');?>" class="<?=$param["prefix_social"];?>item">
				<svg class="icon-svg icon-telegram" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#telegram"></use> 
				</svg> 
			</a>
		</div>
		<?}?>
		<? if(getContact('tw')){?>
		<div class="cols">
			<a href="<?=getContact('tw');?>" class="<?=$param["prefix_social"];?>item">
				<svg class="icon-svg icon-telegram" role="img">
					<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#twitter"></use> 
				</svg> 
			</a>
		</div>
		<?}?>
	</div>
</div> 