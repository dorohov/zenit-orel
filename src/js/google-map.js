function initMap() {       
	var coord = {lat: 52.974166, lng: 36.055625},
		zoom_map = 14,
		mapOptions = {
			zoom: zoom_map,
			center: new google.maps.LatLng(coord.lat, coord.lng),
			scrollwheel: false,	
			styles: [{"elementType":"geometry","stylers":[{"color":"#eaeaea"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c4c4c4"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#b8d8e7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]}]		 
		};
	var mapElement = document.getElementById('map-google');
	var map = new google.maps.Map(mapElement, mapOptions);

	var iconBuild = 'img/default/icon-map-build.jpg',
	 	iconReady = 'img/default/icon-map-ready.jpg';

	var	msk76Coord = {lat: 52.975165, lng: 36.098506},
		stMsk23Coord = {lat: 52.971760, lng: 36.091903},
		laz7Coord = {lat: 52.974491, lng: 36.047910},
		orpart4Coord = {lat: 53.000897, lng: 36.135133},
		orpart6Coord = {lat: 53.001633, lng: 36.136984},
		roza33Coord = {lat:52.958282, lng: 36.070836},
		osip2Coord = {lat:52.973983, lng: 36.047295},
		artel24Coord = {lat:52.987665, lng: 36.109139},
		artel26Coord = {lat:52.988925, lng: 36.104763},
		artel28Coord = {lat:52.989305, lng: 36.104779},
		dubr46Coord = {lat:52.962760, lng: 36.077114},
		lesk4Coord = {lat:52.973470, lng: 36.048261},
		kolp24Coord = {lat:52.978343, lng: 36.082410},
		mhL1Coord = {lat: 52.988224, lng: 36.119465};

	var 
		msk76Marker = new google.maps.Marker({
			position: msk76Coord,
			map: map,
			icon: iconBuild
		}),
		mhL1Marker = new google.maps.Marker({
			position: mhL1Coord,
			map: map,
			icon: iconBuild
		}),
		orpart4Marker = new google.maps.Marker({
			position: orpart4Coord,
			map: map,
			icon: iconBuild
		}),
		roza33Marker = new google.maps.Marker({
			position: roza33Coord,
			map: map,
			icon: iconBuild
		}), 
		laz7Marker = new google.maps.Marker({
			position: laz7Coord,
			map: map,
			icon: iconReady
		}), 
		osip2Marker = new google.maps.Marker({
			position: osip2Coord,
			map: map,
			icon: iconReady
		}), 
		artel26Marker = new google.maps.Marker({
			position: artel26Coord,
			map: map,
			icon: iconReady
		}),  
		artel24Marker = new google.maps.Marker({
			position: artel24Coord,
			map: map,
			icon: iconReady
		}), 
		artel28Marker = new google.maps.Marker({
			position: artel28Coord,
			map: map,
			icon: iconReady
		}), 
		orpart6Marker = new google.maps.Marker({
			position: orpart6Coord,
			map: map,
			icon: iconReady 
		}),
		dubr46Marker = new google.maps.Marker({
			position: dubr46Coord,
			map: map,
			icon: iconReady 
		}),
		lesk4Marker = new google.maps.Marker({
			position: lesk4Coord,
			map: map,
			icon: iconReady 
		}),
		kolp24Marker = new google.maps.Marker({
			position: kolp24Coord,
			map: map,
			icon: iconReady 
		}),
		stMsk23Marker = new google.maps.Marker({
			position: stMsk23Coord,
			map: map,
			icon: iconReady
		});

        $(window).resize(function() {
			google.maps.event.trigger(map, "resize");
			map.setCenter(coord);
        });
};
$(function () {
	$(document.body).on('shown.bs.modal', '.modal', {}, function(event){
		event.preventDefault();
		$(window).trigger('resize');      
	});  
});