<?

$projects_residential = $this->wpq->query( array(
	'post_type' => 'project',
	'posts_per_page' => -1,
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('residential'),
	)),
));

$projects_commercial = $this->wpq->query( array(
	'post_type' => 'project',
	'posts_per_page' => -1,
	//'post_parent' => 0,
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
	'tax_query' => array(array(
		'taxonomy' => 'project_taxonomies',
		'field' => 'slug',
		'terms' => array('commercial'),
	)),
));

?>

<script>

var SiteData = {
	projects : {
		residential : {
			
			<?
			if(count($projects_residential)) {
				foreach($projects_residential as $p) {
					
					//update_post_meta($p->ID, 'status', trim('2'));
					
					$status_date = meta($p->ID, 'status_date');
					$stat_key = meta($p->ID, 'stat_key');
					$stat_value = meta($p->ID, 'stat_value');
					
			?>
			
			<?=$p->ID;?> : {
				id : '<?=$p->ID;?>',
				link : '<?=l($p->ID);?>',
				title : '<?=$p->post_title;?>',
				lat : parseFloat('<?=meta($p->ID, 'lat');?>'),
				lng : parseFloat('<?=meta($p->ID, 'lng');?>'),
				status : '<?=meta($p->ID, 'status');?>',
				status_onsale : '<?=meta($p->ID, 'status_onsale');?>',
				url : '<?=meta($p->ID, 'url');?>',
				marker : null,
				infowindow : null,
				final_at_key : '<?=( $status_date != '' ? 'Окончание проекта' : $stat_key);?>',
				final_at : '<?=( $status_date != '' ? $status_date : $stat_value);?>',
			},
			
			<?
				}
			}
			?>
			
		},
		commercial : {
			
			<?
			if(count($projects_commercial)) {
				foreach($projects_commercial as $p) {
					
					//update_post_meta($p->ID, 'status', trim('2'));
					
					$status_date = meta($p->ID, 'status_date');
					$stat_key = meta($p->ID, 'stat_key');
					$stat_value = meta($p->ID, 'stat_value');
					
			?>
			
			<?=$p->ID;?> : {
				id : '<?=$p->ID;?>',
				link : '<?=l($p->ID);?>',
				title : '<?=$p->post_title;?>',
				lat : parseFloat('<?=meta($p->ID, 'lat');?>'),
				lng : parseFloat('<?=meta($p->ID, 'lng');?>'),
				status : '<?=meta($p->ID, 'status');?>',
				status_onsale : '<?=meta($p->ID, 'status_onsale');?>',
				surface : '<?=meta($p->ID, 'surface');?>',
				marker : null,
				infowindow : null,
				final_at_key : '<?=( $status_date != '' ? $status_date : $stat_key);?>',
				final_at : '<?=$stat_value;?>',
			},
			
			<?
				}
			}
			?>
			
		},
	},
	infowindows : [],
	/*
	markers : {
		residential : [],
		commercial : [],
	},
	*/
}

</script>

<!--<script src="<?=$this->path('js');?>/google-map.js"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5mvq0SP3WCozmHWsYmfdLq_Y3vlaosik&callback=omap__initMap" async defer ></script> 
<script>

var omap__map, omap__mapElement;

var icons = {
	1 : '<?=$this->path('img');?>/default/icon-map-build.jpg',
	2 : '<?=$this->path('img');?>/default/icon-map-ready.jpg',
	3 : '<?=$this->path('img');?>/default/icon-map-ready.jpg',//'<?=$this->path('img');?>/default/icon-map-office.png',
	4 : '<?=$this->path('img');?>/default/icon-map-onsale.jpg',
};

function in_array(value, array) {
	for(var i = 0; i < array.length; i++) {
		if(array[i] == parseInt(value)) return true;
	}
	return false;
}

var azbn_p = 'azbn.';

var SS = {
	set : function(id,value) {sessionStorage.setItem(azbn_p + id, value);},
	get : function(id) {var item = sessionStorage.getItem(azbn_p + id);if(typeof item !== 'undefined' && item != null) {return item;} else {return null;}},
	remove : function(id) {sessionStorage.removeItem(azbn_p + id);},
	clear : function() {sessionStorage.clear();},
	obj2s : function(id,obj2save) {this.set(id, JSON.stringify(obj2save));},
	s2obj : function(id) {var item = this.get(id);if(typeof item !== 'undefined' && item != null) {return JSON.parse(item);} else {return null;}},
};

function omap__objectsByStatus(status_arr, status_onsale) {
	
	if(status_onsale) {
		
		for(var i in SiteData.projects.residential) {
			
			if(SiteData.projects.residential[i].marker && parseInt(SiteData.projects.residential[i].status_onsale)) {
				
				SiteData.projects.residential[i].marker.setMap(omap__map);
				SiteData.projects.residential[i].marker.setIcon(icons[4]);
				
			} else if(SiteData.projects.residential[i].marker) {
				
				SiteData.projects.residential[i].marker.setMap(null);
				
			}
			
		}
		
		for(var i in SiteData.projects.commercial) {
			
			if(SiteData.projects.commercial[i].marker) {
				
				SiteData.projects.commercial[i].marker.setMap(null);
				
			}
			
		}
		
	} else if(!in_array(0, status_arr)) {
		
		for(var i in SiteData.projects.residential) {
			
			if(SiteData.projects.residential[i].marker && in_array(SiteData.projects.residential[i].status, status_arr)) {
				
				SiteData.projects.residential[i].marker.setMap(omap__map);
				SiteData.projects.residential[i].marker.setIcon(icons[SiteData.projects.residential[i].status]);
				
			} else if(SiteData.projects.residential[i].marker) {
				
				SiteData.projects.residential[i].marker.setMap(null);
				
			}
			
		}
		
		for(var i in SiteData.projects.commercial) {
			
			if(SiteData.projects.commercial[i].marker && in_array(SiteData.projects.commercial[i].status, status_arr)) {
				
				SiteData.projects.commercial[i].marker.setMap(omap__map);
				SiteData.projects.commercial[i].marker.setIcon(icons[SiteData.projects.commercial[i].status]);
				
			} else if(SiteData.projects.commercial[i].marker) {
				
				SiteData.projects.commercial[i].marker.setMap(null);
				
			}
			
		}
		
	} else {
		
		for(var i in SiteData.projects.residential) {
			
			if(SiteData.projects.residential[i].marker) {
				
				SiteData.projects.residential[i].marker.setMap(omap__map);
				SiteData.projects.residential[i].marker.setIcon(icons[SiteData.projects.residential[i].status]);
				
			}
			
		}
		
		for(var i in SiteData.projects.commercial) {
			
			if(SiteData.projects.commercial[i].marker) {
				
				SiteData.projects.commercial[i].marker.setMap(omap__map);
				SiteData.projects.commercial[i].marker.setIcon(icons[SiteData.projects.commercial[i].status]);
				
			}
			
		}
		
	}
	
}

function omap__initMap() {
	
	var center = {
		lat : 52.974166,
		lng : 36.055625,
	},
	zoom_map = 14,
	mapOptions = {
		zoom : zoom_map,
		center : new google.maps.LatLng(center.lat, center.lng),
		scrollwheel : false,	
		styles : [{"elementType":"geometry","stylers":[{"color":"#eaeaea"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#c1c1c1"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c4c4c4"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#b8d8e7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]}]	 
	};
	
	omap__mapElement = document.getElementById('map-google');
	
	omap__map = new google.maps.Map(omap__mapElement, mapOptions);
	
	
	var getInfoWindowHTML = function(point) {
		
		var container = $('<div/>', {
			'class' : 'gmap-infowindow-container',
		});
		
		var title = $('<div/>', {
			'class' : '_title',
			'html' : point.title,
		}).appendTo(container);
		
		var info_key = $('<div/>', {
			'class' : '_info-key',
			'html' : point.final_at_key,
		}).appendTo(container);
		
		var info_value = $('<div/>', {
			'class' : '_info-value',
			'html' : point.final_at,
		}).appendTo(container);
		
		var a_link = $('<a/>', {
			'href' : point.link,
			'class' : 'btn-site btn-blue _goto',
			'html' : '<span class="name">Перейти</span><span class="bg"></span>',
		}).appendTo(container);
		
		return container.get(0).outerHTML;
		
	}
	
	var addMarkerToMap = function(point, to) {
		
		setTimeout(function() {
			
			point.marker = new google.maps.Marker({
				position : {
					lat : point.lat,
					lng : point.lng,
				},
				map : omap__map,
				icon : icons[point.status],
				//title : point.title,
			});
			
			point.infowindow = new google.maps.InfoWindow({
				content : getInfoWindowHTML(point),
				//pixelOffset : 15,
			});
			
			SiteData.infowindows.push(point.infowindow);
			
			point.marker.addListener('mouseover', function() {
				
				for(var __i = 0; __i < SiteData.infowindows.length; __i++) {
					SiteData.infowindows[__i].close();
				}
				
				point.infowindow.open(omap__map, point.marker);
				
			});
			
			/*
			point.marker.addListener('mouseout', function() {
				//point.infowindow.close();
			});
			*/
			
			point.marker.addListener('click', function() {
				point.infowindow.close();
				window.location.href = point.link;
			});
			
		}, to * 99);
		
	};
	
	var _j = 0;
	
	for(var i in SiteData.projects.residential) {
		
		var point = SiteData.projects.residential[i];
		
		_j++;
		
		if(point.lat && point.lng) {
			
			addMarkerToMap(point, _j);
			
		}
		
	}
	
	for(var i in SiteData.projects.commercial) {
		
		var point = SiteData.projects.commercial[i];
		
		_j++;
		
		if(point.lat && point.lng) {
			
			addMarkerToMap(point, _j);
			
		}
		
	}
	
	$(window).resize(function() {
		
		var el = $(omap__mapElement);
		var coord = el.attr('data-coord');
		var _c;
		
		if(coord && coord != '') {
			
			_c = coord.split(',');
			
			_c = {
				lat : _c[0],
				lng : _c[1],
			};
			
		} else {
			
			_c = center;
			
		}
		
		google.maps.event.trigger(omap__map, 'resize');
		omap__map.setCenter(new google.maps.LatLng(_c.lat, _c.lng));
		
	});
	
	$(document.body).on('click', '.azbn-map-filter-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		//var status = parseInt(btn.attr('data-status-filter') || 0);
		var status_arr = (btn.attr('data-status-filter') || '0').split(',');
		
		status_arr = status_arr.map(function(v){
			return parseInt(v);
		});
		
		var status_onsale = parseInt(btn.attr('data-status-onsale-filter') || '0');
		
		$('.azbn-map-filter-btn').removeClass('is--active');
		btn.addClass('is--active');
		
		omap__objectsByStatus(status_arr, status_onsale);
		
	});
	
	
	$(document.body).on('click', '.azbn-map-view-project-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var project_id = parseInt(btn.attr('data-project-id') || 0);
		
		var _c = null;
		var _z = 16;
		
		omap__map.setZoom(_z);
		
	});
	
	
}

$(function () {
	
	$(document.body).on('shown.bs.modal', '.modal', {}, function(event){
		event.preventDefault();
		$(window).trigger('resize');
	});
	
	$(document.body).on('click', '.azbn-project-filter-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		//var status = parseInt(btn.attr('data-status-filter') || 0);
		var status_arr = (btn.attr('data-status-filter') || '0').split(',');
		
		status_arr = status_arr.map(function(v){
			return parseInt(v);
		});
		
		SS.set('last_tab_viewed', status_arr[0]);
		//console.log(status_arr[0]);
		
		var status_onsale = parseInt(btn.attr('data-status-onsale-filter') || '0');
		
		//console.log(status_arr);
		
		$('.azbn-project-filter-btn').removeClass('is--active');
		btn.addClass('is--active');
		
		var items = $('.azbn-project-filter-item');//azbn-project-filter-item" data-status-filter
		
		if(status_onsale) {
			
			items.each(function(index){
				
				var item = $(this);
				
				var _status = parseInt(item.attr('data-status-onsale-filter'));
				
				if(status_onsale == _status && item.is(':hidden')) {
					
					item.css({opacity : 1}).fadeIn('fast');
					
					/*
					item.animate({
						opacity : 1,
					}, 500, function() {
						item.show();
					});
					*/
					
				} else if(status_onsale == _status) {
					
					
					
				} else {
					
					item.css({opacity : 0}).fadeOut('fast');
					
				}
				
			});
			
		} else if(in_array(0, status_arr)) {
			//console.log(status_arr);
			items.filter(':hidden').css({opacity : 1}).fadeIn('fast');
			
		} else {
			
			items.each(function(index){
				
				var item = $(this);
				
				var _status = parseInt(item.attr('data-status-filter'));
				
				if(in_array(_status, status_arr) && item.is(':hidden')) {
					
					item.css({opacity : 1}).fadeIn('fast');
					
				} else if(in_array(_status, status_arr)) {
					
					
					
				} else {
					
					item.css({opacity : 0}).fadeOut('fast');
					
				}
				
			});
			
		}
		
		if(status) {
			
			
			
		} else {
			
			
			
		}
		
	});
	
});

</script>

<div class="modal fade modal-map" id="modal-objacts-map" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-map__dialog">
		<div class="modal-content modal-map__content">
			<div class="modal-body modal-map__body" >
				<button type="button" class="btn-site btn-close modal-map__close modal-close" data-dismiss="modal" aria-hidden="true">
					<svg class="modal-map__close-rect-block modal-close__rect-block">
						<rect class="modal-map__close-rect modal-close__rect" x="0" y="0"/>
					</svg>
					<svg class="icon-svg icon-cancel" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#cancel"></use>
					</svg> 
				</button>				
				<div class="objacts-map__filter-panel modal-map__filter-panel">
					<ul class="objacts-map__filter modal-map__filter">
						<li>
							<a href="#" class="objacts-map__filter-item modal-map__filter-item is--active azbn-map-filter-btn " data-status-filter="0" title="Все объекты">
								<span class="objacts-map__filter-icon modal-map__filter-icon"><svg class="icon-svg icon-filter-all" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-all"></use>
								</svg></span>
								<span class="objacts-map__filter-name modal-map__filter-name" >Все<br> объекты</span>
							</a>
						</li>
						<li>
							<a href="#" class="objacts-map__filter-item modal-map__filter-item azbn-map-filter-btn " data-status-filter="4" data-status-onsale-filter="1" title="Квартиры в продаже">
								<span class="objacts-map__filter-icon modal-map__filter-icon"><svg class="icon-svg icon-filter-buy" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-buy"></use>
								</svg></span>
								<span class="objacts-map__filter-name modal-map__filter-name" >Квартиры<br> в&nbsp;продаже</span>
							</a>
						</li>
						<li>
							<a href="#" class="objacts-map__filter-item modal-map__filter-item azbn-map-filter-btn " data-status-filter="1" title="Строящиеся объекты">
								<span class="objacts-map__filter-icon modal-map__filter-icon"><svg class="icon-svg icon-filter-build" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-build"></use>
								</svg></span>
								<span class="objacts-map__filter-name modal-map__filter-name">Строящиеся<br> объекты</span>
							</a>
						</li>
						<li>
							<a href="#" class="objacts-map__filter-item modal-map__filter-item azbn-map-filter-btn " data-status-filter="2" title="Объекты, сданные в эксплуатацию">
								<span class="objacts-map__filter-icon modal-map__filter-icon"><svg class="icon-svg icon-filter-ready" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#filter-ready"></use>
								</svg></span>
								<span class="objacts-map__filter-name modal-map__filter-name">Объекты, сданные<br> в эксплуатацию</span>
							</a>
						</li>
					</ul>
				</div>
				
				<?
				if((in_array($this->post['id'], array(1), false))){
					
				} else {
				?>
				<div id="map-google" class="modal-map__map" <?if(is_singular('project')) { ?>data-coord="<?=meta($this->post['id'], 'lat');?>, <?=meta($this->post['id'], 'lng');?>"<? } ?> ></div>
				<?
				}
				?>
				
				
			</div>
		</div>
	</div>
</div>