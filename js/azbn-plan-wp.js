$(function(){
	//$('.btn-back-link').popover({trigger : 'hover'});
	window.houseData = {};
	
	var getDateStr = function() {
		var d = new Date();
		return '' + d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate() + '-' + d.getHours();
	}
	
	var __getHumanNum = function(i) {
		return ('' + i).replace('.', ','); 
	}
	
	var getFlatData = function(id){
		
		var res = {};
		res.flat = window.houseData.points[id];
		//console.log(flat);
		
		res.layout_id = res.flat.layout;
		res.layout = window.houseData.layouts[res.layout_id];
		res.flat_d = res.layout.layoutstoreys[0];
		
		return res;
	};
	
	Number.prototype.triads = function(sep, dot, frac){
		sep = sep || String.fromCharCode(160);
		dot = dot || ',';
		if(typeof frac == 'undefined') {
			frac = 0;
		}

		var num = parseInt(this).toString();

		var reg = /(-?\d+)(\d{3})/;
		while(reg.test(num)) {
			num = num.replace(reg, '$1' + sep + '$2');
		}

		if(!frac) {
			return num;
		}
		
		var a = this.toString();
		
		if(a.indexOf('.') >= 0) {
			a = a.toString().substr(a.indexOf('.') + 1, frac);
			a += Array(frac - a.length + 1).join('0');
		} else {
			a = Array(frac + 1).join('0');
		}
		
		return num + dot + a;
	}
	
	
	$(document.body).on({
		submit : function(event) {
			event.preventDefault();
			
			var form = $(this);
			var url = form.attr('data-target-url') || '/wp-admin/admin-ajax.php';
			var sform = form.serialize();
			
			$('#modal-message').modal();
			
			$.post(url, sform, function(data){
				
				form.trigger('reset');
				
			})
			
		},
	}, 'form.azbn-form-save');
	
	$(document.body).on({
		submit : function(event) {
			event.preventDefault();
			
			var form = $(this);
			var url = form.attr('data-target-url') || '/wp-admin/admin-ajax.php';
			var sform = form.serialize();
			
			//$('#modal-message').modal();
			
			$.post(url, sform, function(data){
				
				//form.trigger('reset');
				data = JSON.parse(data);
				//console.log(data);
				
				if(data.response.data.item.auth && !data.response.data.item.error) {
					window.location.reload();
				} else {
					alert('Ошибка входа! Проверьте логин и пароль.');
				}
				
			})
			
		},
	}, 'form.azbn-form-login');
	
	
	if(device.desktop()) {
		$(document.body).on({
			mouseenter : function(event) {
				//console.log('mouseenter');
				
				var poly = $(this);
				var popover = $('.azbn-flat-info-popover');
				var cont = $('.azbn-floor-svg-container');
				
				var pos = poly.offset();
				var _pos = cont.offset();
				
				var flat = getFlatData(poly.attr('data-flat_id') || 0);
				
				$('.azbn-flat-info-popover__rooms_number').html(flat.layout.rooms_number);
				$('.azbn-flat-info-popover__total_area').html(__getHumanNum(flat.layout.total_area));
				$('.azbn-flat-info-popover__price').html(__getHumanNum(flat.flat.price.triads()));
				
				popover.find('._status').hide();
				
				if(flat.flat.is_sold) {
					popover.find('.azbn-flat-info-popover__status-is_sold').show();
				} else if(flat.flat.is_reserved) {
					popover.find('.azbn-flat-info-popover__status-is_reserved').show();
				} else {
					popover.find('.azbn-flat-info-popover__status-free').show();
				}
				
				popover.css({
					top : pos.top - _pos.top - 40 + 'px',
					left : pos.left - _pos.left + 20 + 'px',
				})
				
				popover.fadeIn('fast');
				
			},
			mouseleave : function(event) {
				//console.log('mouseleave');
				
				var poly = $(this);
				var popover = $('.azbn-flat-info-popover');
				
				popover.fadeOut('fast');
				
			},
		}, '.floor-apartment .floor-polygon');
	}
	
	
	
	$(document.body).on('azbn.load.houseData', null, {}, function(event){
		
		//var p = window.location.href.split('?');
		
		if(1) {
			
			//var p_str = p[1];
			////console.log(p_str);
			//
			//var p_o = {};
			//var p_get = p[1].split('&');
			//if(p_get.length) {
			if(1) {
			//	for(i = 0; i < p_get.length; i++) {
			//		var _ = p_get[i].split('=');
			//		p_o[_[0]] = parseInt(_[1]);
			//	}
				
				$__floor_id = parseInt($('.azbn-floor-content').attr('data-floor_id'));
				
				if($__floor_id > 0) {
					
					console.log('этаж выбран! ' + $__floor_id);
					
					$('.azbn-flat-info-popover').hide();
					
					$('.azbn-floor-num-selected').html($__floor_id);
					
					//$('.azbn-floor-col-item[data-floor_id="' + p_o['floor_id'] + '"]').addClass('active');
					
					var img_index = $__floor_id;
					
					//$('#svg-bg image').attr('xlink:href', '/img/layouts/bg-apartment-' + img_index + '.png')
					
					/*
					$.ajax({
						url : '/wp-content/themes/azbnbasetheme/img/svg/floors/' + img_index + '.svg?v=' + getDateStr(),
						type : 'GET',
						dataType : 'text',
						success : function(data){
							var oldsvg = $('svg.floor-svg');
							$(data).insertAfter(oldsvg);
							oldsvg.empty().remove();
						}
					});
					*/
					
					
					
					//console.log(flats);
					
				}
				/*
				if(p_o['flat_id']) {
					
					console.log('квартира выбрана! ' + p_o['flat_id']);
					
					var flat = window.houseData.points[p_o['flat_id']];
					//console.log(flat);
					
					var layout_id = flat.layout;
					var layout = window.houseData.layouts[layout_id];
					var flat_d = layout.layoutstoreys[0];
					
					$('.azbn-go2-floor-link').on('click.azbn', function(event){
						event.preventDefault();
						
						window.location.href = '/layouts-floor.html?floor_id=' + flat.floor;
						
					});
					
					var img = flat_d.flat_image;
					
					$('.azbn-apartment-img-view').attr('src', img);
					
					$('.azbn__layouts__rooms_number').html(layout.rooms_number);
					
					$('.azbn__layouts__total_area').html(__getHumanNum(layout.total_area));
					$('.azbn__layouts__living_area').html(__getHumanNum(layout.living_area));
					$('.azbn__layouts__layoutstoreys__kitchen_area').html(__getHumanNum(flat_d.kitchen_area));
					
					$('.azbn__points__price').html(flat.price.triads());
					$('.azbn__points__price__of_m2').html((Math.ceil(flat.price / layout.total_area)).triads());
					
					$('title').html($('title').html().replace(new RegExp('%','g'), layout.rooms_number));
					
					if(flat.is_sold) {
						$('.azbn__points__free').empty().remove();
						$('.azbn__points__is_reserved').empty().remove();
					} else if(flat.is_reserved) {
						$('.azbn__points__free').empty().remove();
						$('.azbn__points__is_sold').empty().remove();
					} else {
						$('.azbn__points__is_reserved').empty().remove();
						$('.azbn__points__is_sold').empty().remove();
					}
					
				}
				*/
			}
			
		} else if($('.layouts-page-content').length) {
			
			var by_rooms = {};
			var is_free = {}
			
			for(var j in window.houseData.floor) {
				
				by_rooms[j] = {
					1 : 0,
					2 : 0,
					3 : 0,
				};
				
				is_free[j] = 0;
				
				var flats = window.houseData.floor[j];
				
				for(var i in flats) {
					var flat_id = flats[i];
					
					var flat = window.houseData.points[flat_id];
					var layout_id = flat.layout;
					var layout = window.houseData.layouts[layout_id];
					var flat_d = layout.layoutstoreys[0];
					
					if(!flat.is_sold && !flat.is_reserved) {
						is_free[j]++;
						by_rooms[j][layout.rooms_number]++;
					}
					
				}
				
			}
			
			$('.layouts-page-content .layout-polygon').each(function(){
				
				var poly = $(this);
				var floor_id = parseInt(poly.attr('data-floor-id'));
				
				poly
					.attr('data-qty', is_free[floor_id])
					.attr('data-qty-one', by_rooms[floor_id][1])
					.attr('data-qty-two', by_rooms[floor_id][2])
					.attr('data-qty-three', by_rooms[floor_id][3])
				;
				
			})
			
			console.log(by_rooms);
			
		}
		
	});
	
	$.getJSON('/background/stroycrm/houseData.12.json?v=' + getDateStr(), function(data){
		window.houseData = data;
		$(document.body).trigger('azbn.load.houseData');
	});
	
});